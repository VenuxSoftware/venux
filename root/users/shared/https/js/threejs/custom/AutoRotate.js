THREE.AutoRotate = function (object, domElement) {

    this.object = object;
    this.domElement = (domElement !== undefined) ? domElement : document;

    // API

    // Set to false to disable this control
    this.enabled = true;

    // "target" sets the location of focus, where the control orbits around
    // and where it pans with respect to.
    this.target = new THREE.Vector3();
    // center is old, deprecated; use "target" instead
    this.center = this.target;

    // Limits to how far you can dolly in and out
    this.minDistance = 0;
    this.maxDistance = Infinity;

    // Set to true to disable this control
    this.noRotate = false;
    this.rotateSpeed = 20;


    // Set to true to automatically rotate around the target
    this.autoRotate = false;
    this.autoRotateSpeed = 20; // 30 seconds per round when fps is 60

    // How far you can orbit vertically, upper and lower limits.
    // Range is 0 to Math.PI radians.
    this.minPolarAngle = 0; // radians
    this.maxPolarAngle = Math.PI; // radians


    ////////////
    // internals

    var scope = this;

    var EPS = 0.000001;

    var rotateStart = new THREE.Vector2();
    var rotateEnd = new THREE.Vector2();
    var rotateDelta = new THREE.Vector2();


    var thetaDelta = 0;


    var lastPosition = new THREE.Vector3();

    var STATE = { NONE: -1, ROTATE: 0 };
    var state = STATE.NONE;

    //var currentAngle;

    // events

    var changeEvent = { type: 'change' };


    this.rotateLeft = function (angle) {

        if (angle === undefined) {

            angle = getAutoRotationAngle();
        }
        

        thetaDelta -= angle;
    };


    this.update = function () {

        var position = this.object.position;
        var offset = position.clone().sub(this.target);

        // angle from z-axis around y-axis

        var theta = Math.atan2(offset.x, offset.z);

        // angle from y-axis

        var phi = Math.atan2(Math.sqrt(offset.x * offset.x + offset.z * offset.z), offset.y);

        if (this.autoRotate) {

          this.rotateLeft(getAutoRotationAngle());
        }



       // console.debug(thetaDelta);
        //if (thetaDelta >= 3.14) {
        //    this.autoRotate = false;
        //}



        theta += thetaDelta;


        // restrict phi to be between desired limits
        phi = Math.max(this.minPolarAngle, Math.min(this.maxPolarAngle, phi));

        // restrict phi to be betwee EPS and PI-EPS
        phi = Math.max(EPS, Math.min(Math.PI - EPS, phi));

        var radius = offset.length() * scale;

        // restrict radius to be between desired limits
        radius = Math.max(this.minDistance, Math.min(this.maxDistance, radius));

        offset.x = radius * Math.sin(phi) * Math.sin(theta);
        offset.y = radius * Math.cos(phi);
        offset.z = radius * Math.sin(phi) * Math.cos(theta);

        position.copy(this.target).add(offset);

        this.object.lookAt(this.target);

        thetaDelta = 0;

        if (lastPosition.distanceTo(this.object.position) > 0) {

            this.dispatchEvent(changeEvent);

            lastPosition.copy(this.object.position);

        }

    };


    function getAutoRotationAngle() {

       return 2 * Math.PI / 60 / 60 * scope.autoRotateSpeed;
    }

};

THREE.AutoRotate.prototype = Object.create(THREE.EventDispatcher.prototype);
