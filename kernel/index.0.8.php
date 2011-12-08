<!DOCTYPE html>
<html>
<head>
<title>grml.org - Kernel</title>
<meta name="Title" content="grml.org - Kernel" />
<meta name="Author" content="the grml team [www.grml.org/team/]" />
<meta name="Keywords" content="grml.org, grml" />
<meta name="Description" content="Kernel of grml.org" />
<meta name="Abstract" content="grml, just another linux-distribution" />
<meta name="fdse-index-as" content="http://www.grml.org/kernel/" />
<meta name="Robots" content="index,follow" />
<meta name="Language" content="english" />
<meta name="identifier-url" content="http://www.grml.org/" />
<meta name="MSSmartTagsPreventParsing" content="true" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="home" href="/" title="grml.org" />
<link rel="help" href="/features/" title="About" />
<link rel="author" href="/team/" title="Team" />
<link rel="icon" href="/favicon.png" type="image/png" />
<link rel="stylesheet" href="/style.css" type="text/css" />
</head>

<body>
<?php include '../static.inc'; ?>

      <div class="content">

        <p><img style="float: right" src="/img/kernel.png" alt="*" /></p>

        <h1>Kernel</h1>

        <p>The kernel 2.6 provided by the grml system is based on the latest
        stable(!) vanilla kernel (taken from <a
        href="http://kernel.org/">kernel.org</a>) we consider as 'useful and
        working'. The grml-kernel includes <a href="#patches">several patches</a> and
        <a href="#modules">modules</a>.  If you experience any problems please don't
        hesitate to <a href="/contact/">contact us</a>!</p>

        <p><strong><a href="/donations/">Help us and support our work!</a></strong></p>

        <h2>grml 0.8</h2>

        <p>Release 0.8 provides kernel 2.6.17:</p>

<pre class="rahmen">
grml@grml ~ % uname -a
Linux grml 2.6.17-grml #1 SMP PREEMPT Tue Jul 25 10:57:35 CEST 2006 i686 GNU/Linux</pre>

         <p>The <a href="config-2.6.17-grml">kernel configuration of 2.6.17-grml</a>
         is available online. If you want to patch a vanilla kernel without applying
         all the single patches take a look at the <a
         href="http://dufo.tugraz.at/~prokop/grml-kernel/2.6.17-info/all-in-one-2.6.17-grml-6">all-in-one
         kernel patch</a> (3.9M).</p>

        <h2>grml-small 0.2</h2>

        <p>grml-small is a very small flavor of the grml-system. It includes a kernel
        based on 2.6.15 with additional patches (<a
        href="all-in-one-2.6.15-grml-8.gz">all-in-one kernel patch</a> applied), with
        SMP enabled but less features than the full grml system:</p>

<pre class="rahmen">
grml@grml ~ % uname -a
Linux grml 2.6.15-grml-small #1 SMP PREEMPT Mon Jan 16 22:29:19 CET 2006 i686 GNU/Linux</pre>

        <p>The <a href="config-2.6.15-grml-small">kernel configuration of
        2.6.15-grml-small</a> is available online.</p>


        <h2><a name="patches"></a>Kernel Patches</h2>

        <h3><a name="fixes"></a>Kernel Patches: Fixes</h3>

        <p>Notice: For more information regarding kernel patches take a look at <a
        href="kernel-patches-2.6.17-grml">kernel-patches-2.6.17-grml</a> as well.</p>

        <ul>
          <li>2.6.17.7: stable kernel update</li>
          <li>ahci-nvidia-mcp65: support new nvidia MCP65 SATA controllers</li>
          <li>alsa-hda-lenovo-3000: fix sound on Lenovo 3000 laptops</li>
          <li>asix-88178: support USB ASIX 88178 ethernet</li>
          <li>bcm4319: add PCI ID for bcm4319 wifi card</li>
          <li>buslogic-pci-id-table: add MODULE_DEVICE_TABLE</li>
          <li>dm-bbr: bad block relocation support for LiveCD users</li>
          <li>forcedeth-new-ids: support various new nvidia ethernet adapters</li>
          <li>grml_kernelversion: adjust kernel version (2.6.17-grml)</li>
          <li>grml_logo: include grml-logo in framebuffer</li>
          <li>ipw3945-1.0.5-for-2.6.17: Intel(R) PRO/Wireless 3945ABG Network Connection driver</li>
<!--      http://www.ite.com.tw/software_download/software_download2.asp -->
          <li>iteraid: driver for IT82xx ATA133 RAID Controller</li>
          <li>jmicron-ahci: support new JMicron SATA hardware</li>
          <li>libata-acpi: add support for ACPI methods to SATA suspend/resume</li>
          <li>linux-2.6.17-commandline: set COMMAND_LINE_SIZE to 512 characters</li>
          <li>nvidia-ide-new: support new nvidia IDE hardware</li>
          <li>nvidia-mcp61: nvidia MCP61 storage support</li>
          <li>nvidia-sata-new: support even more new nvidia SATA hardware</li>
          <li>pcnet-cs-te-cf100: add PCMCIA ID for trendnet TE-CF100 ethernet adapter</li>
          <li>promise-pdc2037x: adds support for Promise 2037x SATA controllers which have PATA ports</li>
          <li>serial-dz: fix compilation error in dz.c</li>
          <li>sky2-2.6.18-rc2: several sky2/skge fixes (see ChangeLog-2.6.18-rc2)</li>
          <li>sky2-NAPI-poll-fix: NAPI poll fix</li>
          <li>usb-insufficient-power: print a message when a device is rejected due to insufficient power</li>
          <li>vt8251-sata: support VT8251 SATA controllers</li>
        </ul>

        <h3><a name="reiser4"></a>Reiser4</h3>

        <p>Reiser4 is a computer file system, a new "from scratch" version of the
        ReiserFS file system, developed by Namesys. See <a
        href="http://en.wikipedia.org/wiki/Reiser4">Reiser4 at wikipedia</a> for some
        more details.</p>

        <ul>
          <li><a href="http://www.namesys.com/">Namesys</a></li>
        </ul>

        <h3><a name="speakup"></a>Speakup</h3>

        <p>Speakup is a screen reader/speech access system for the GNU/Linux
        Operating System, used by people who are blind.</p>

        <ul>
          <li><a href="http://www.linux-speakup.org/">www.linux-speakup.org</a></li>
          <li><a href="http://dev.gentoo.org/~dsd/genpatches/trunk/2.6.17/4400_speakup-20060618.patch">>4400_speakup-20060618.patch</a>
        </ul>

        <h3><a name="squashfs"></a>Squashfs</h3>

        <p>Squashfs is a compressed read-only filesystem for Linux.  Squashfs is
        intended for general read-only filesystem use, for archival use (i.e. in
        cases where a .tar.gz file may be used), and in constrained block
        device/memory systems (e.g. embedded systems) where low overhead is
        needed.<br />

        Via using the module loop it is possible to mount a filesystem file. squashfs
        is a "loop" with (de)compression (Compressed Loopback Device) and it is
        possible to mount a compressed filesystem like a block device and seamlessly
        decompress its data while accessing it.<br />

        Whereas Knoppix uses the cloop mechanism, grml is based on the newer
        mechanism squashfs. The filesystem has been compressed into the file
        "/GRML/GRML" and is mounted by the initial init process using squashfs.</p>

        <ul>
          <li><a href="http://dev.gentoo.org/~dsd/genpatches/trunk/2.6.17/4300_squashfs-3.0.patch">4300_squashfs-3.0.patch</a></li>
          <li><a href="http://squashfs.sourceforge.net/">squashfs.sf.net</a></li>
        </ul>

        <h2><a name="modules"></a>Modules</h2>

        <p>Additionally to the patched kernel you'll find some extra modules on
        your grml-system.</p>

        <h3>Package grml-kerneladdons</h3>

        <p>This package contains release specific kernel modules where no extra debian
        package exists yet. The following drivers are included:</p>

        <ul>
          <li>acerhk: give access to the special keys on notebooks of the Acer Travelmate by <a href="http://www.informatik.hu-berlin.de/~tauber/acerhk/">Olaf Tauber</a></li>
          <li>adp94xx: support for Adaptec AIC-9405 four port SAS and SATA 64-bit PCI-X 133MHz ASIC</li>
          <li>cowloop: copy-on-write loop driver by <a href="http://www.atconsultancy.nl/cowloop/">AT Consultancy</a></li>
          <li>dazuko: <a href="http://www.dazuko.org/">'Your Gateway to File Access Control'</a></li>
          <li>et131x: <a href="http://svn.sliepen.eu.org/et131x/">10/100/1000 Base-T
          Ethernet Driver for the ET1310 by Agere Systems</a></li>
          <li>kqemu: <a
          href="http://fabrice.bellard.free.fr/qemu/qemu-accel.html">QEMU
          Accelerator</a></li>
          <li>pcan: driver for low cost CAN-Hardware by Peak System by <a href="http://www.peak-system.com/linux/">Peak-System.com</a> [the grml-team uses this hardware in the <a href="http://www.robocup.tugraz.at/">Robocup-team @ TUG</a>]</li>
          <li>snd-bt-sco: driver to use headset via bluetooth by <a href="http://bluetooth-alsa.sourceforge.net/">bluetooth-alsa.sf.net</a></li>
          Module</a> (with permission by Fabrice Bellard, thanks!), notice that a kqemu enabled debian package is available <a href="http://grml.org/repos/">in the grml-repos</a></li>
          series
        </ul>

        <h3>acx100</h3>

        <p>Drivers for Texas Instruments' ACX100/ACX111 wireless network chips.  This
        includes DWL-[G]520+ PCI, DWL-[G]650+ CardBus, GL-2422MP mini-PCI, DWL-120+
        USB, etc.</p>

        <ul>
          <li><a href="http://acx100.sourceforge.net/">acx100.sf.net</a></li>
        </ul>

        <h3>bcm5700</h3>

        <p>Linux driver for the Broadcom BCM5700 series Ethernet Network
        Controllers.</p>

        <ul>
          <li><a href="http://packages.debian.org/unstable/net/bcm5700-source">bcm5700@debian</a></li>
        </ul>

        <h3>drbd0.7</h3>

        <p>RAID 1 over TCP/IP for Linux. Drbd is a block device which is designed to
        build high availability clusters by providing a virtual shared device which
        keeps disks in nodes synchronised using TCP/IP. This simulates RAID 1 but
        avoiding the use of uncommon hardware (shared SCSI buses or Fibre Channel).
        It is currently limited to fail-over HA clusters.</p>

        <ul>
          <li><a href="http://www.drbd.org/">drbd.org</a></li>
        </ul>

        <h3>exmap</h3>

        <p>Exmap is a memory analysis tool which allows you to accurately determine
        how much physical memory and swap is used by individual processes and shared
        libraries on a running system. In particular, it accounts for the sharing of
        memory and swap between different processes.</p>

        <p>Notice: exmap isn't shipped by the grml 0.7 Live-CD because it requires
        too much space. Run 'apt-get update; apt-get install exmap' to install
        it.</p>

        <ul>
          <li><a href="http://www.berthels.co.uk/exmap/">www.berthels.co.uk/exmap/</a></li>
        </ul>

        <h3>ipw3945</h3>

        <p>The Intel(R) PRO/Wireless 3945ABG Network Connection driver. grml ships
        ipw3945d (Intel PRO/Wireless 3945ABG Daemon) and ipw3945-ucode (microcode for
        Intel PRO/Wireless 3945ABG Network Connection Adapter) as well. (Notice: the
        driver is not an extra module package but has been patched into the
        grml-kernel itself.)</li>

        <ul>
          <li><a href="http://ipw3945.sourceforge.net/">ipw3945.sf.net</a></li>
        </ul>
        <h3>ivtv0.7</h3>

        <p>The primary goal of the IvyTV Project is to create a kernel driver for the
        iTVC15 familiy of MPEG codecs. The iTVC15 family includes the iTVC15
        (CX24315) and iTVC16 (CX24316). These chips are commonly found on Hauppauge's
        WinTV PVR-250 and PVR-350 TV capture cards. (Take a look at <a
        href="http://wiki.grml.org/doku.php?id=tips">'Hauppauge PVR250'</a> in the
        grml-wiki.)</p>

        <ul>
          <li><a href="http://ivtvdriver.org/">ivtvdriver.org</a></li>
        </ul>

        <h3>linux-wlan-ng</h3>

        <p>linux-wlan-ng is a set of drivers and utilities that is intended to
        provide the full range of IEEE 802.11 MAC management capabilities for use in
        user-mode utilities and scripts. The package currently supports the Intersil
        802.11b Prism2, Prism2.5, and Prism3 reference designs for PCMCIA, PCI, and
        USB. Additionally, the package includes support for the PLX9052 based PCI to
        PCMCIA adapter with a few different PCMCIA cards.</p>

        <h3>loop-aes</h3>

        <p>Using loop-aes with &gt;=2.6.13 fails with 'register_blkdev: cannot get
        major 7 for loop'. grml requires a stable loopback device interface
        (CONFIG_BLK_DEV_LOOP=y) but loop-aes has different requirements so loop-aes
        is <strong>not</strong> part of grml. :-/</p>

        <h3>lufs</h3>

        <p>Linux Userland Filesystem - kernel module source LUFS is a hybrid
        userspace filesystem framework supporting an indefinite number of filesystems
        (localfs, sshfs, ftpfs, httpfs, socketfs, freenetfs, and nutellafs)
        transparently for any application. It consists of a kernel module which
        interacts with the VFS while the main part of the implementation is done in
        the userspace.</p>

        <h3>madwifi</h3>

        <p>Driver for Atheros-based Wireless LAN devices - the Multiband Atheros
        Driver for WiFi (madwifi). (The madwifi drivers are the ones known as
        madwifi-ng)</p>

        <ul>
          <li><a href="http://madwifi.sourceforge.net/">madwifi.sf.net</a></li>
          <li><a href="http://madwifi.org/wiki/UserDocs/GettingMadwifi">madwifi-ng</a></li>
          <li><a href="http://madwifi.org/wiki/UserDocs/Distro/Debian">Debian-Docs</a></li>
        </ul>

        <h3>ndiswrapper</h3>

        <p>Some vendors do not release specifications of the hardware or provide a
        linux driver for their wireless network cards. ndiswrapper provides a linux
        kernel module that loads and runs Ndis (Windows network driver API) drivers
        supplied by the vendors.</p>

        <ul>
          <li><a href="http://ndiswrapper.sourceforge.net/">ndiswrapper.sf.net</a></li>
        </ul>

        <h3>nozomi</h3>

        <p>kernel driver for the GlobeTrotter 3G EDGE PC Card (HSDPA-prepared).
        Serial Numbers can be used to identify this model. Look for SNR: NZ. Driver
        and PC Card are provided by Option Wireless Technology.</p>

        <ul>
          <li><a href="http://www.pharscape.org/">www.pharscape.org</a></li>
        </ul>

        <h3>openafs</h3>

        <p>The AFS distributed filesystem. AFS is a distributed filesystem allowing
        cross-platform sharing of files among multiple computers.  Facilities are
        provided for access control, authentication, backup and administrative
        management.</p>

        <p>Notice: the module is named libafs.ko on grml 0.7. Running 'modprobe
        openafs' works because of a symlink, but the loaded module is named libafs
        anyway so run 'rmmod libafs' to remove it.</p>

        <h3>pwc</h3>

        <p>Drivers for the Philips Webcams.</p>

        <ul>
          <li><a href="http://www.saillard.org/linux/pwc/">Philips USB Webcam Driver for Linux</a></li>
        </ul>

        <h3>qc-usb-modules</h3>

        <p>The qc-usb-modules package contains a kernel module to drive Logitech's
        USB-based QuickCam Express webcam and other cameras with similar
        chipsets.</p>

        <ul>
          <li><a href="http://www.ee.oulu.fi/~tuukkat/quickcam/quickcam.html">www.ee.oulu.fi/~tuukkat/quickcam/quickcam.html</a></li>
        </ul>

        <h3>realtime-lsm</h3>

        <p>Scripts for handling the realtime Linux security module.  It sets up the
        system to grant realtime permissions to applications in the realtime
        group.</p>

        <ul>
          <li><a href="http://www.google.com/search?q=realtime-lsm">realtime-lsm@google</a></li>
        </ul>

        <h3>rt2x00</h3>

        <p>Linux driver for wireless 802.11b and 802.11g cards that are based on the
        Ralink rt2400 and rt2500 chipsets. grml provides drivers for rt2x00, rt2400,
        rt2500 and rt2570.</p>

        <p>Notice: to avoid conflicts with the other rt2x00-drivers the package
        rt2x00 (which includes beta-version drivers) is not installed by default. If
        you want to use the kernel modules rt2400pci, rt2500pci, rt2500usb, rt61pci
        and/or rt73usb please install the package manually running 'dpkg -i
        /usr/src/rt2*.deb'.</p>

        <ul>
          <li><a href="http://rt2x00.serialmonkey.com/wiki/index.php/Main_Page">rt2x00.serialmonkey.com</a></li>
        </ul>

        <h3>sl-modem</h3>

        <p>Low-level drivers for the software modems produced by Smart Link Ltd. It
        supports PCI and USB models.</p>

        <ul>
          <li><a href="http://www.smlink.com/main/item.php?ln=en&amp;item_id=84&amp;main_id=32">Smart
          Link. Introducing the First Soft ADSL over Ethernet</a></li>
        </ul>

        <h3>spca5xx</h3>

        <p>Kernel modules for the spca5xx video for linux (v4l) driver (SPCA5XX USB
        Camera).</p>

        <ul>
          <li><a href="http://mxhaard.free.fr/index.html">SPCA5xx webcams Linux driver</a></li>
        </ul>

        <h3>sysprof</h3>

        <p> Sysprof is a sampling CPU profiler that uses a Linux kernel module to
        profile the entire system, not just a single application. Sysprof handles
        shared libraries and applications do not need to be recompiled. In fact they
        don't even have to be restarted.</p>

        <ul>
          <li><a href="http://www.daimi.au.dk/~sandmann/sysprof/">sysprof</a></li>
        </ul>

        <h3>thinkpad</h3>

        <p>Loadable driver modules used by the tpctl utility for configuring IBM
        ThinkPad laptop computers. Included are drivers of the Super I/O and RT/CMOS
        RAM chips, for an interface to the IBM ThinkPad SMAPI BIOS, and for an
        interface to the ThinkPad APM subsystem.</p>

        <ul>
          <li><a href="http://www.linux-thinkpad.org/">Linux-ThinkPad.org</a></li>
        </ul>

        <h3>tidev</h3>

        <p>This driver will be useful to you if you own a Texas Instruments
        calculator and want to use one of the following link cables:</p>

        <ul>
          <li>official "black cable" from Texas Instruments (BlackLink)</li>
          <li>home-made serial link</li>
          <li>home-made parallel cable</li>
          <li>official GraphLink USB from Texas Instruments (SilverLink)</li>
        </ul>

        <p>Notice: You'll also need a linking software such as TiLP to communicate
        with your calculator (not part of the live-cd, run 'apt-get install
        tilp').</p>

        <h3>truecrypt</h3>

        <p>TrueCrypt manages encrypted TrueCrypt volumes, which can be mapped as
        virtual block devices and used as any other standard block device. All data
        being read from a mapped TrueCrypt volume is transparently decrypted and all
        data being written to it is transparently encrpyted.</p>

        <ul>
          <li><a href="http://www.truecrypt.org/">truecrypt.org</a></li>
        </ul>

        <h3>unionfs</h3>

        <p>Unionfs is a stackable unification file system, which can appear to merge the
        contents of several directories (branches), while keeping their physical
        content separate. Unionfs is useful for unified source tree management,
        merged contents of split CD-ROM, merged separate software package
        directories, data grids, and more. Unionfs allows any mix of read-only and
        read-write branches, as well as insertion and deletion of branches anywhere
        in the fan-out. To maintain unix semantics, Unionfs handles elimination of
        duplicates, partial-error conditions, and more.</p>

        <ul>
          <li><a href="http://www.am-utils.org/project-unionfs.html">www.am-utils.org/project-unionfs.htm</a></li>
        </ul>

        <h3>vaiostat</h3>

        <p>Sony Vaio status and control kernel module. This module creates
        some entries in /proc/vaio concerning battery and power usage information,
        and LCD brightness levels on Sony Vaio laptops. Although on newer laptops
        some of this information is handled by ACPI as well, this module is required
        for some older ones, and still works on the newer ones.  Recent kernel
        sources include a SONYPI module that provides similar functionality to this
        one, but it cannot change LCD brightness on some laptops where this module
        works.</p>

        <ul>
          <li><a href="http://queda.net/linux/">queda.net/linux/</a></li>
        </ul>

        <h3>zd1211</h3>

        <p>Driver for the USB wireless dongles that are based on the ZyDAS ZD1211
        802.11b/g USB WLAN chipset.</p>

        <p><strong>Any further wishes, feedback, bug reports? Please <a
        href="/contact/">contact us</a>!</strong></p>

      </div>


<?php include '../static_bottom.inc'; ?>