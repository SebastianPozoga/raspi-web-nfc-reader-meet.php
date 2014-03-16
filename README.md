raspi-web-nfc-reader-meet.php
=============================

Raspberry Pi NFC is a simple example from my meet.php presentation. The example shows how to create a php NFC service.
The service read your card (or phone) ID and save it in a database. The id can be use to recognize a user.
The aplication implement web interface to show read cards history. I use knockout.js and php rest api to update information automaticaly.

Install
=======

To run the example you should install:
*apache
*php module
*mysql
*libNFC
*nfc-tools

Run
===

After install you can use nfcCards.sql file to create database. And run nfcService.php (with sudo permissions):

```
sudo php nfcService.php
```

Now you can see result by www.

Hardware
========

The example was by tested with ACR122 NFC Reader. I use Raspberry Pi v2.0, raspbian and wifi card. Works properly with other systems and hardware.

Presentation
============

http://www.slideshare.net/sebastianpozoga/meetphpgpio [pl]
