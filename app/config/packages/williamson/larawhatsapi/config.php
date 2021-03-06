<?php

return array(
    'debug'            => false,
    'useAccount'       => 'default',
    'nextChallengeDir' => '/home/user/whatsapi/nextChallengefolder', //Must be writable by webserver
    'fork'             => 'MGP25', // Which fork of the WhatsApi project do you wish to use?
                                 // Only 2 options, TMV or MGP25.
                                 // https://github.com/thomasvargiu/TmvWhatsApi
                                 // https://github.com/mgp25/WhatsAPI-Official


    /**
     * These are fake credentials below. Don't even bother trying to use them.
     *
     * Now listen up. The identity field seems to screw everyone up. This is how it works.
     * Whatsapp needs a unique string, 20 characters long when you register, for it to keep track of the device using the service.
     * When you use THIS API, the identity token provided gets urldecoded to see if it's 20 characters long.
     *
     * If it is NOT 20 characters long, the identity token gets hashed using sha1, then urlencoded (so we can save/use it easily as a string)
     * and finally converted to lower case. This now gives us a unique (to us) 20 character long string.
     *
     * If you provide a string (either already URLencoded or a string that when urlDecoded is 20 characters long) that will be used instead of
     * any processing by the API. This allows you to use an identity that you might already know or have received using another problem eg WART.
     *
     * It's up to you.
     */
    'accounts'         => array(
        'default'    => array('nickName' => 'Payminder',
                              'number'   => '31629200257',
                              'password' => 'Odns/OKOkg3oT9CzrKP47GhlIcc=',
                              'identity' => '%3d%d6%a8%d0q%28%9a%22%23%b7%17x%91%222%05%d7%9c%11%21'
        )
    )
);