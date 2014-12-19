<?php include('includes/header.php') ?>
<div class="container" style="min-height: 800px;">
  <div class="row">
      <div class="col-md-6">
          <h2>Kura Downloads</h2>
          <p>The below downloads are distributed through the Eclipse Foundation and meet all requirements of the <a href="https://www.eclipse.org/legal/epl-v10.html" target="_blank">Eclipse Public License</a>.
            Entries below the downloads section give more explanation on each type of download.</p>
          <ul>
              <li style="color: #4f5c6d"><a href="http://www.eclipse.org/downloads/download.php?file=/kura/releases/1.1.0/kura_1.1.0_raspberry-pi_armv6.deb" target="_blank">Raspbian - Stable</a></li>
              <li style="color: #4f5c6d"><a href="http://www.eclipse.org/downloads/download.php?file=/kura/releases/1.1.0/kura_1.1.0_raspberry-pi-nn_armv6.deb" target="_blank">Raspbian (No Net)- Stable</a></li>
              <li style="color: #4f5c6d"><a href="http://www.eclipse.org/downloads/download.php?file=/kura/SNAPSHOT/kura_1.1.0-SNAPSHOT_raspberry-pi_armv6.deb" target="_blank">Raspbian - Development</a></li>
              <li style="color: #4f5c6d"><a href="http://www.eclipse.org/downloads/download.php?file=/kura/releases/1.1.0/kura_1.1.0_raspberry-pi-bplus_armv6.deb" target="_blank">Raspbian (Model B+)- Stable</a></li>
              <li style="color: #4f5c6d"><a href="http://www.eclipse.org/downloads/download.php?file=/kura/releases/1.1.0/kura_1.1.0_raspberry-pi-bplus-nn_armv6.deb" target="_blank">Raspbian (Model B+, No Net)- Stable</a></li>
              <li style="color: #4f5c6d"><a href="http://www.eclipse.org/downloads/download.php?file=/kura/SNAPSHOT/kura_1.1.0-SNAPSHOT_raspberry-pi-bplus_armv6.deb" target="_blank">Raspbian (Model B+)- Development</a></li>
              <li style="color: #4f5c6d"><a href="http://www.eclipse.org/downloads/download.php?file=/kura/releases/1.1.0/kura_1.1.0_beaglebone_debian_armv7.deb" target="_blank">BeagleBone - Stable</a></li></li>
              <li style="color: #4f5c6d"><a href="http://www.eclipse.org/downloads/download.php?file=/kura/releases/1.1.0/kura_1.1.0_beaglebone-nn_debian_armv7.deb" target="_blank">BeagleBone (No Net) - Stable</a></li></li>
              <li style="color: #4f5c6d"><a href="http://www.eclipse.org/downloads/download.php?file=/kura/SNAPSHOT/kura_1.1.0-SNAPSHOT_beaglebone_debian_armv7.deb" target="_blank">BeagleBone - Development</a></li>
              <li style="color: #4f5c6d"><a href="http://www.eclipse.org/downloads/download.php?file=/kura/releases/1.1.0/user_workspace_archive_1.1.0.zip" target="_blank">Developer's Workspace</a></li>
          </ul>
      </div>
      <div class="col-md-6">
          <h2>Kura Extended Downloads</h2>
          <p>The below downloads contain the web UI and CAN bundles. These features <b>do not</b> adhere to the requirements of the <a href="https://www.eclipse.org/legal/epl-v10.html" target="_blank">Eclipse Public License</a>
            and <b>are not</b> covered by EPL.
          </p>
          <ul>
              <li style="color: #4f5c6d"><a href="https://s3.amazonaws.com/kura_downloads/raspbian/release/1.1.0/kura_1.1.0_raspberry-pi_armv6.deb" target="_blank">Raspbian (with Web UI) - Stable</a></li>
              <li style="color: #4f5c6d"><a href="https://s3.amazonaws.com/kura_downloads/raspbian/release/1.1.0/kura_1.1.0_raspberry-pi-nn_armv6.deb" target="_blank">Raspbian (No, Net, with Web UI) - Stable</a></li>
              <li style="color: #4f5c6d"><a href="https://s3.amazonaws.com/kura_downloads/raspbian/release/1.1.0/kura_1.1.0_raspberry-pi-bplus_armv6.deb" target="_blank">Raspbian (Model B+, with Web UI) - Stable</a></li>
              <li style="color: #4f5c6d"><a href="https://s3.amazonaws.com/kura_downloads/raspbian/release/1.1.0/kura_1.1.0_raspberry-pi-bplus-nn_armv6.deb" target="_blank">Raspbian (Model B+, No Net, with Web UI) - Stable</a></li>
              <li style="color: #4f5c6d"><a href="https://s3.amazonaws.com/kura_downloads/debian/release/1.1.0/kura_1.1.0_beaglebone_debian_armv7.deb" target="_blank">BeagleBone (with Web UI) - Stable</a></li>
              <li style="color: #4f5c6d"><a href="https://s3.amazonaws.com/kura_downloads/debian/release/1.1.0/kura_1.1.0_beaglebone-nn_debian_armv7.deb" target="_blank">BeagleBone (No net, with Web UI) - Stable</a></li>
              <li style="color: #4f5c6d"><a href="https://s3.amazonaws.com/kura_downloads/user_workspace/1.1.0/user_workspace_archive_1.1.0.zip" target="_blank">Developer's Workspace (with Web UI)</a></li>
              <li style="color: #4f5c6d"><a href="https://s3.amazonaws.com/kura_downloads/raspbian/snapshot/kura_1.1.0-SNAPSHOT_raspberry-pi_armv6.deb" target="_blank">Raspbian Snapshot Release</a></li>
          </ul>
      </div>
  </div>
  <a name="source_code"></a>
  <h2>Source Code</h2>
  <p>
    The source code for Eclipse Kura is available at Github <a href="https://github.com/eclipse/kura" target="_blank">here</a>
  </p>
  <a name="debian_packages"></a>
  <h2>Raspbian/Debian Packages</h2>
  <p>
    Along with release and snapshot versions, Kura also provides "no networking" versions of the Debian install files. Files with "(No Net)" will provide frameworks in which Kura will not assist in configuring
    network interfaces or firewall. Installation instructions for the Raspberry Pi and BeagleBone Black can be found at the below locations:</p>
    <ul>
        <li style="color: #4f5c6d"><a href="http://eclipse.github.io/kura/doc/raspberry-pi-quick-start.html" target="_blank">Raspberry Pi Quick Start</a></li>
        <li style="color: #4f5c6d"><a href="http://eclipse.github.io/kura/doc/beaglebone-quick-start.html" target="_blank">BeagleBone Black Quick Start</a></li>
    </ul>
  <h2>Application Developer Workspace</h2>
  <p>
    A workspace archive is available to help speed up the application development process. The archive contains all the necessary APIs and
    jar files to develop applications without building Kura from scratch. Simply import the archive into an Eclipse workspace and start coding.
  </p>
  <h2>Repositories</h2>
  <p>Eclipse hosts a Nexus for those who want to use Maven to manage their dependencies. The release and snapshot repositories can be found here:</p>
    <ul>
      <li style="color: #4f5c6d"><a href="https://repo.eclipse.org/content/repositories/kura-releases" target="_blank">Release</a></li>
      <li style="color: #4f5c6d"><a href="https://repo.eclipse.org/content/repositories/kura-snapshots/" target="_blank">SNAPSHOTS</a></li>
    </ul>
  <h2>Manual Installation</h2>
  <p>
    If you want to manually install Kura on your Raspberry Pi or BeagleBone, the jar file archives can be found below.
    <ul>
        <li style="color: #4f5c6d"><a href="http://www.eclipse.org/downloads/download.php?file=/kura/releases/1.1.0/kura_1.1.0_raspberry-pi.zip" target="_blank">Raspbian</a></li>
        <li style="color: #4f5c6d"><a href="http://www.eclipse.org/downloads/download.php?file=/kura/releases/1.1.0/kura_1.1.0_raspberry-pi-bplus.zip" target="_blank">Raspbian (Model B+)</a></li>
        <li style="color: #4f5c6d"><a href="http://www.eclipse.org/downloads/download.php?file=/kura/releases/1.1.0/kura_1.1.0_beaglebone.zip" target="_blank">BeagleBone</a></li>
    </ul>
  </p>
</div>
<?php include('includes/footer.php') ?>
