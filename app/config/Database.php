<?php 

/* 
    Anza - 1
    Version: 1.0.0
    Author: XL Scripts Core Team
    url: https://xlscripts.com

    XL Scripts - 2020
    This software is licensed under the MIT License.

    __   __ _       _____  _____ ______  _____ ______  _____  _____ 
    \ \ / /| |     /  ___|/  __ \| ___ \|_   _|| ___ \|_   _|/  ___|
    \ V / | |     \ `--. | /  \/| |_/ /  | |  | |_/ /  | |  \ `--. 
    /   \ | |      `--. \| |    |    /   | |  |  __/   | |   `--. \
    / /^\ \| |____ /\__/ /| \__/\| |\ \  _| |_ | |      | |  /\__/ /
    \/   \/\_____/ \____/  \____/\_| \_| \___/ \_|      \_/  \____/ 
                                                                        
*/

namespace Anza\Config;

class Database {
    public function __construct() {
        $this->driver        = 'db_default';
        $this->default_group = 'default';

        $this->groups = array(
            'default' => array(
                'host'      => 'localhost',
                'username'  => 'root',
                'password'  => '',
                'database'  => 'imager',

                'charset'   => 'utf8'
            ),
            'Anza'   => array(
                'host'      => 'localhost',
                'username'  => 'root',
                'password'  => '',
                'database'  => 'imager',

                'charset'   => 'utf8'
            )
        );
    }
}