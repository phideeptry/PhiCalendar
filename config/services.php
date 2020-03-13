<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'firebase' => [
        'database_url' => env('FIREBASE_DATABASE_URL', 'https://phiphicalendar.firebaseio.com/'),
        'project_id' => env('FIREBASE_PROJECT_ID', 'phiphicalendar'),
        'private_key_id' => env('FIREBASE_PRIVATE_KEY_ID', '36748c3ba0a2103b3202b6e24de85e92ace46915'),
        'private_key' => str_replace("\\n", "\n", env('FIREBASE_PRIVATE_KEY', '-----BEGIN PRIVATE KEY-----\nMIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQCUybW3fu1P88iN\nNvruyVkQ2JgvHQNkSrno+KmsFpBCviDzJ75jcSlq3g3qjS5s5tIuqDxBah3erFMI\nCjBWtbN6uOVgPIYyKDhk1fl+kuHGmZixvEjEgn6V0js3XG+xSK3JlMKklzp+jozO\nqZXRyaIIUlvUFbTOui4pBrYRdWZAySmC6l60h+TwAr3zZhqH+yiooMkhWvaa6jbT\nEiorWUsgE23A/+auAFov/g1Kx09IL2+IsJY6gm6LTMZ5Ey0ic20DW7sK8kagpojC\nim+CFao/sGcscc8JMUlJ1Be39Nn2AwHgjjpjACUJdefYapmfpRR2M9dd9PbAAkv5\nahVUYDxnAgMBAAECggEAIrlcpoGB4vnzITnmoFnvZmYWRlCQHRTvhHacKqRtcJYs\n3HK3FUAwuVcvikD+x72q6eargVzBsdkn26V9GI95XrfOGIKnkwcd+jKR8r9W3+Gy\n6DAYD3yhDFgvJ8Fz870Rig0kzALbTPP52rVrWLWlEioeckXKl8CNy1dcoIB0p8Ov\npnwnrlRaBWejUH1hGbCQYU1o0SJPKnx9UpZPr75pDRjYVaaVPtOgyvjyegp+31k8\nbvlKqrc+xKO6XClEKo199lzZtsNPXg2YVyZ+RF+MnAbIf7Ybq3sGcAe6iwM93g3h\n5064PWQoYizjQFB+yMtL3sdiLQEmWh6IyHu3Dr9dWQKBgQDOWAE8TggeSvYlYASl\nQRFMalPimGOMGcBxpjT6vztgodlf+ncA1BxiPquoyOQdSddI087UE+CHy7SYCLOm\nAUy/fxIusaF2Pk+yTwm4MeoLKzGMph+LehwbA5qA5HizOi7KznFqpSDnTMW1YUSQ\nZlTDkvF/kooL4C4PcRSgrEA5GwKBgQC4l+zdMxBy8dAlFbh//OOh/8XLIGwFadqF\neJcvOHachXWIGgGLIIZcsT0C5P2bxvEAbKW+Zs4yiahu+whnWRfwr87T3+sQiGrq\nhhFFVUL8u8NzqhzZIc8JCE9nv3QrZgUfbymfjXXmLXpLlcQFBJbad/v6sbQSM/Qf\nfiHg36cqpQKBgQCJ7tg8mKjinxd1mn7gfON0YmtawKVixOAY2JL3vxeRG//0Ibil\nLCUhI2WaeVfLoE2yGCxdJkBkZi59put4H8xPAkGERyd4pGSf/CeyImOiPahsravO\nj7zz7e+9E3z/yff3iBLWyDV7iJ1tBu1PXahx5+tZbPqsv5nqppu0YBC6WwKBgFy3\nCiRsIoXpSOdninzWcysKAbmttjPd4AEL+bug+4pQSiErFr1ff70M1J0gkPTuLlxN\nNc51anndxHjBo43tJOYiF5s5q6JpMnJLFl+hnHy+fkQZHFY+8fMSdnegpOOrYUVR\nmzFlZuNO0k8mkQcIMBDZFPnsyYofCC3NN4zwKNF1AoGBAMsB4DffU5jj2nJTvaeH\nFDL6d75p+Q64E3EEsm42hwxCp1nJNu9VLe44EI6rTmchK3FJjHckpqZaaPi0Ow3v\nzPVakxdM+B5y/vKUxfvMPLQr0AEis+hfauVmfqfPFLkHA1wIgKQ81a7Of4U8f7AO\nezBa3bArfIDyl20Nf+AazfnU\n-----END PRIVATE KEY-----\n')),
        'client_email' => env('FIREBASE_CLIENT_EMAIL', 'phiphicalendar@appspot.gserviceaccount.com'),
        'client_id' => env('FIREBASE_CLIENT_ID', '106115649205465267086'),
        'client_x509_cert_url' => env('FIREBASE_CLIENT_x509_CERT_URL', 'https://www.googleapis.com/oauth2/v1/certs'),
    ],
];
