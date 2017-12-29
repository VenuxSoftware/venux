var Settings = (function () {
    return {
        Downloads: {
            Windows: {
                IsEnabled: true,
                IsVisible: true,
                Extension: 'exe'
            },
            Mac: {
                IsEnabled: false,
                IsVisible: true,
                Extension: 'dmg'
            },
            Linux: {
                IsEnabled: false,
                IsVisible: false,
                Extension: 'tgz'
            },
            QaEnabled: false,
            //Will take effect if no visible products are enabled
            DeactivatedMessage: 'Downloads will be available soon.'
        },

        Overview: {
            StartPage: {
                Files: 9,
                Mme: 5,
                Connect: 3
            }
        },
        IsEnabled: {
            Stats: false,
            Controls: false,
            WrapAround: false,
            Reflections: false,
            Shadows: true,
            AxisHelper: false,
            ArrowHelper: false,
            GridHelper: false,
            CameraHelper: false,
            DirectionalLightHelper: false,
            HemisphereLightHelper: false,
            LookatOrigin: false,
            RotationControls: false,
            Autospin: false,
            AnaglypEffect: false,
            ParallaxEffect: false
        },
        DaeFile: 'models/dae/2014-13.dae'
    }
}());