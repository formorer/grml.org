<!DOCTYPE html>
<html>
<head>
<title>grml.org - QEMU</title>
<meta name="Title" content="grml.org - QEMU" />
<meta name="Author" content="the grml team [www.grml.org/team/]" />
<meta name="Keywords" content="grml.org, grml" />
<meta name="Description" content="QEMU of grml.org" />
<meta name="Abstract" content="grml, just another linux-distribution" />
<meta name="fdse-index-as" content="http://www.grml.org/faq/" />
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

        <p><img style="float: right" src="/img/clanbomber.png" alt="*" /></p>

        <h1>QEMU</h1>

        <p><a href="http://fabrice.bellard.free.fr/qemu/">QEMU</a> is an emulator for
        various CPUs. It works on Linux, Windows, FreeBSD and Mac OS X. It's possible
        to run grml with QEMU. Notice that it's much slower than running it native
        due to the emulation mode.</p>

        <h2>Using QEMU with acceleration</h2>

	<p>grml &gt;=0.5 provides the <a
	href="http://fabrice.bellard.free.fr/qemu/">accelerator
	module</a> for QEMU namend 'kqemu'. Just run the following
	commands to use it:</p>

<pre class="rahmen">
apt-get update ; apt-get install qemu # install qemu
modprobe kqemu                        # load the kernel module
mknod /dev/kqemu c 250 0              # create the device
chmod 666 /dev/kqemu /dev/net/tun     # adjust permissions</pre>

        <p>To see if kqemu is enabled and working correctly, use the QEMU monitor
        command (press ctrl-alt-2): 'info kqemu'</p>

        <h2>Problems with Qemu</h2>

        <h3>Black / blank screen</h3>

        <p>You get a black/blank screen when booting grml in qemu? Try booting with &quot;grml vga=normal&quot;.</p>

        <h2>Running QEMU with grml on Linux</h2>

        <p>Install qemu (apt-get install qemu) and start it e.g. via:</p>

<pre class="rahmen">
qemu -cdrom /dev/hdc          # if running from CD-ROM
qemu -cdrom /path/to/grml.iso # if running from harddisk
</pre>

        <h2>Running QEMU with grml on Windows</h2>

        <p><a href="qemu-1.png"><img style="border: 0" src="qemu-1.jpg"
        alt="screenshot 1" /></a> </p>

        <p>First of all download <a href="http://www.h7.dion.ne.jp/~qemu-win/">QEMU
        for Windows</a>. <a href="/download/">Download
        the grml-iso</a> and put the QEMU files in the same directory as the
        grml-iso.</p>

        <p>Now create a startup file, call it for example <a
        href="grml-qemu.bat">grml-qemu.bat</a>:</p>

<pre class="rahmen">
REM Start qemu on windows.
@ECHO OFF
START qemu.exe -L . -m 128 -hdc harddisk -cdrom grml_0.6.iso
CLS
EXIT</pre>

      <p>Adjust the values if necessary and now run the grml-qemu.bat-file. Have fun
      :-)</p>

      <p><a href="/screenshots/qemu.jpg"><img style="border: 0" src="/screenshots/qemu_small.jpg" alt="screenshot 3" /></a></p>

      </div>

<?php include '../static_bottom.inc'; ?>
