/*
Title: Installing Gaia from Github to Mozilla Flame device
Date: 2015/11/2
*/

I made many mistakes while before installing modified Gaia to Mozilla Flame.
To avoid repeating them again, these steps in this blog.
The instruction was provided at https://developer.mozilla.org/en-US/Firefox_OS/Phone_guide/Flame/Updating_your_Flame. However, in this blog, the instruction is more specfic and brief. The steps are as follow.

1. Download and extract http://cds.w5v8t3u9.hwcdn.net/v18D_nightly_v4.zip
2. Attach Flame to PC.
3. adb root
4. Run ./flash.sh from 1.
5. Download https://raw.githubusercontent.com/Mozilla-TWQA/B2G-flash-tool/master/shallow_flash.sh
6. Download latest gaia.zip and b2g-*.zip from https://ftp.mozilla.org/pub/mozilla.org/b2g/nightly/latest-mozilla-central-flame-kk/
7. adb root
8. Run ./shallow_flash.sh -ggaia.zip -Gb2g-.*.gz (e.g. ./shallow_flash.sh -ggaia.zip -Gb2g-45.0a1.en-US.android-arm.tar.gz)
9. git clone https://github.com/mozilla-b2g/gaia
10. Modify Gaia
11. make
12. adb root
13. make install-gaia

DONE!

