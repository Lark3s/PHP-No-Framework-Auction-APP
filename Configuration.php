<?php
    final class Configuration {
        const BASE              = 'http://localhost/';
        const DATABASE_HOST     = 'localhost';
        const DATABASE_USER     = '';
        const DATABASE_PASSWORD = '';
        const DATABASE_NAME     = 'aukcije';

        const SESSION_STORAGE      = '\\App\\Core\\Session\\FileSessionStorage';
        const SESSION_STORAGE_DATA = [ './sessions/' ];
        const SESSION_LIFETIME     = 3600;

        const FINGERPRINT_PROVIDER_FACTORY = '\\App\\Core\\Fingerprint\\BasicFingerprintProviderFactory';
        const FINGERPRINT_PROVIDER_METHOD  = 'getInstance';
        const FINGERPRINT_PROVIDER_ARGS    = [ 'SERVER' ];

        const UPLOAD_DIR = 'assets/uploads/';

        const REPORT_PATH = 'assets/report/report.json';



        const DEFAULT_IMAGE_WIDTH  = 320;
        const DEFAULT_IMAGE_HEIGHT = 240;

        const MAIL_HOST = 'smtp.office365.com'; //todo: koristiti lokalni fake send mail mehanizam umesto pravog hosta
        const MAIL_PORT = '587';
        const MAIL_PROTOCOL = 'tls';
        const MAIL_USERNAME = '';
        const MAIL_PASSWORD = '';
    }