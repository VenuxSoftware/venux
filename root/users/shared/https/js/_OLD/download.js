///<reference path="settings.js" />
//Alex Zemelshteyn 2014
function download(product, OS) {
    var qaPrefix = Settings.Downloads.QaEnabled === true ? 'qa-' : '';
    var extension;
    switch (OS) {
        case 'win':
            extension = Settings.Downloads.Windows.Extension;
            break;
        case 'mac':
            extension = Settings.Downloads.Mac.Extension;
            break;
        case 'linux':
            extension = Settings.Downloads.Linux.Extension;
            break;
    }

    url = "http://www.venux.com/software/download/" + qaPrefix + product + "-setup." + extension;

    var hiddenIFrameID = 'Downloader',
        iframe = document.getElementById(hiddenIFrameID);
    if (iframe === null) {
        iframe = document.createElement('iframe');
        iframe.id = hiddenIFrameID;
        iframe.style.display = 'none';
        document.body.appendChild(iframe);
    }
    iframe.src = url;

    var os = document.getElementById('os');
    var thankYou = document.getElementById('downloadThankYou');

    os.style.display = 'none';
    thankYou.style.display = 'block';
}

window.onload = function () {
    document.body.id = 'mainContent';
    var downloadWindows = document.querySelector('#downloadWindows');
    var downloadMac = document.querySelector('#downloadMac');
    var downloadLinux = document.querySelector('#downloadLinux');
    var downloadDescription = document.querySelector('.downloadDescription');

    if (Settings.Downloads.Windows.IsVisible) {
        if (Settings.Downloads.Windows.IsEnabled) {
            downloadWindows.parentNode.onclick = function () {
                download('mme', 'win');
            }
        }
        else {
            downloadWindows.parentNode.className += ' inactive';
        }
    }
    else {
        Settings.Downloads.Windows.IsEnabled = false;
        downloadWindows.parentNode.style.display = 'none';
    }
    //
    if (Settings.Downloads.Mac.IsVisible) {
        if (Settings.Downloads.Mac.IsEnabled) {
            downloadMac.parentNode.onclick = function () {
                download('mme', 'mac');
            }
        }
        else {
            downloadMac.parentNode.className += ' inactive';
        }
    }
    else {
        Settings.Downloads.Mac.IsEnabled = false;
        downloadMac.parentNode.style.display = 'none';
    }
    //
    if (Settings.Downloads.Linux.IsVisible) {
        if (Settings.Downloads.Linux.IsEnabled) {
            downloadLinux.parentNode.onclick = function () {
                download('mme', 'linux');
            }
        }
        else {
            downloadLinux.parentNode.className += ' inactive';
        }
    }
    else {
        Settings.Downloads.Linux.IsEnabled = false;
        downloadLinux.parentNode.style.display = 'none';
    }

    if (!Settings.Downloads.Linux.IsEnabled && !Settings.Downloads.Mac.IsEnabled && !Settings.Downloads.Windows.IsEnabled) {
        downloadDescription.innerHTML = Settings.Downloads.DeactivatedMessage;
    }

    //var downloadWrapper = document.createElement('div');
    //downloadWrapper.id = 'downloadWrapper';

    //var download = document.createElement('div');
    //download.id = 'download';

    //var center = document.createElement('center');

    //var downloadMac = document.createElement('div');
    //downloadMac.id = 'downloadMac';
    //downloadMac.className = 'hint--bottom hint--rounded downloadProgram';
    //downloadMac.setAttribute('data-hint', 'Download Mac Version');

    //var downloadWindows = document.createElement('div');
    //downloadWindows.id = 'downloadWindows';
    //downloadWindows.className = 'hint--bottom hint--rounded downloadProgram';
    //downloadWindows.setAttribute('data-hint', 'Download Windows Version');

    //var inactive = document.createElement('div');
    //inactive.className = 'inline hint--bottom hint--rounded';
    //inactive.setAttribute('data-hint', 'Not available at this time');

    //var downloadLinux = document.createElement('div');
    //downloadLinux.id = 'downloadLinux';
    //downloadLinux.className = 'inactive';
    ////

    //document.body.appendChild(downloadWrapper);
    //downloadWrapper.appendChild(download);
    //download.appendChild(center);
    //center.appendChild(downloadWindows);
    //center.appendChild(downloadMac);
    //center.appendChild(inactive);
    //inactive.appendChild(downloadLinux);
    //
}