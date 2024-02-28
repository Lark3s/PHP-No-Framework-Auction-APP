<?php
    namespace App\Core\Fingerprint;

    class BasicFingerprintProvider implements FingerprintProvider {
        private $data;

        public function __construct(array $data) {
            $this->data = $data;
        }

        //digitalni otisak je heš od heša user agenta + ip adrese
        public function provideFingerprint(): string
        {
            $userAgent = filter_var($this->data['HTTP_USER_AGENT'] ?? '', FILTER_UNSAFE_RAW); 
            $ipAddress = filter_var($this->data['REMOTE_ADDR'] ?? '', FILTER_UNSAFE_RAW); 
            $string = $userAgent . '|' . $ipAddress;
            $hash1 = hash('sha512', $string);
            return hash('sha512', $hash1);
        }
    }
