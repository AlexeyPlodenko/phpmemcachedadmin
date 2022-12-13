<?php
/**
 * Copyright 2010 Cyrille Mahieux
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and limitations
 * under the License.
 *
 * ><)))°> ><)))°> ><)))°> ><)))°> ><)))°> ><)))°> ><)))°> ><)))°> ><)))°>
 *
 * Sending command to memcache server via PECL memcache API http://pecl.php.net/package/memcache
 *
 * @author elijaa@free.fr
 *
 * @since 20/03/2010
 */

namespace App\Library\Command;

class Memcached implements CommandInterface
{
    /** @var Memcached */
    private static $_memcache;

    /**
     * Constructor
     */
    public function __construct()
    {
        // Initializing
        self::$_memcache = new \Memcached();
    }

    /**
     * Send stats command to server
     * Return the result if successful or false otherwise
     *
     * @param string $server Hostname
     * @param int    $port   Hostname Port
     *
     * @return array|bool
     */
    public function stats($server, $port)
    {
        // Adding server
        self::$_memcache->addServer($server, $port);

        // Executing command
        if ($return = self::$_memcache->getStats()) {
            // Delete server key based
            $stats = $return[$server.':'.$port];

            // Adding value that miss
            $stats['delete_hits'] = '';
            $stats['delete_misses'] = '';
            $stats['incr_hits'] = '';
            $stats['incr_misses'] = '';
            $stats['decr_hits'] = '';
            $stats['decr_misses'] = '';
            $stats['cas_hits'] = '';
            $stats['cas_misses'] = '';
            $stats['cas_badval'] = '';

            return $stats;
        }

        return false;
    }

    /**
     * Send stats settings command to server
     * Return the result if successful or false otherwise
     *
     * @param string $server Hostname
     * @param int    $port   Hostname Port
     *
     * @return bool
     */
    public function settings($server, $port)
    {
        return false;
    }

    /**
     * Send stats items command to server to retrieve slabs stats
     * Return the result if successful or false otherwise
     *
     * @param string $server Hostname
     * @param int    $port   Hostname Port
     *
     * @return array|bool
     *
     * @throws \Exception
     */
    public function slabs($server, $port)
    {
        throw new \Exception('PECL Memcache does not support slabs stats, use Server or Memcache instead');
    }

    /**
     * Send stats cachedump command to server to retrieve slabs items
     * Return the result if successful or false otherwise
     *
     * @param string $server Hostname
     * @param int    $port   Hostname Port
     * @param int    $slab   Slab ID
     *
     * @return array|bool
     *
     * @throws \Exception
     */
    public function items($server, $port, $slab)
    {
        throw new \Exception('PECL Memcache does not support slabs items stats, use Server or Memcache instead');
    }

    /**
     * Send get command to server to retrieve an item
     * Return the result
     *
     * @param string $server Hostname
     * @param int    $port   Hostname Port
     * @param string $key    Key to retrieve
     *
     * @return string
     */
    public function get($server, $port, $key)
    {
        // Adding server
        self::$_memcache->addServer($server, $port);

        // Executing command : get
        if ($item = self::$_memcache->get($key)) {
            return print_r($item, true);
        }

        return self::$_memcache->getResultMessage();
    }

    /**
     * Set an item
     * Return the result
     *
     * @param string $server   Hostname
     * @param int    $port     Hostname Port
     * @param string $key      Key to store
     * @param mixed  $data     Data to store
     * @param int    $duration Duration
     *
     * @return string
     */
    public function set($server, $port, $key, $data, $duration)
    {
        // Adding server
        self::$_memcache->addServer($server, $port);

        // Checking duration
        if ($duration == '') {
            $duration = 0;
        }

        // Executing command : set
        self::$_memcache->set($key, $data, $duration);

        return self::$_memcache->getResultMessage();
    }

    /**
     * Delete an item
     * Return the result
     *
     * @param string $server Hostname
     * @param int    $port   Hostname Port
     * @param string $key    Key to delete
     *
     * @return string
     */
    public function delete($server, $port, $key)
    {
        // Adding server
        self::$_memcache->addServer($server, $port);

        // Executing command : delete
        self::$_memcache->delete($key);

        return self::$_memcache->getResultMessage();
    }

    /**
     * Increment the key by value
     * Return the result
     *
     * @param string $server Hostname
     * @param int    $port   Hostname Port
     * @param string $key    Key to increment
     * @param int    $value  Value to increment
     *
     * @return string
     */
    public function increment($server, $port, $key, $value)
    {
        // Adding server
        self::$_memcache->addServer($server, $port);

        // Executing command : increment
        if ($result = self::$_memcache->increment($key, $value)) {
            return $result;
        }

        return self::$_memcache->getResultMessage();
    }

    /**
     * Decrement the key by value
     * Return the result
     *
     * @param string $server Hostname
     * @param int    $port   Hostname Port
     * @param string $key    Key to decrement
     * @param int    $value  Value to decrement
     *
     * @return string
     */
    public function decrement($server, $port, $key, $value)
    {
        // Adding server
        self::$_memcache->addServer($server, $port);

        // Executing command : decrement
        if ($result = self::$_memcache->decrement($key, $value)) {
            return $result;
        }

        return self::$_memcache->getResultMessage();
    }

    /**
     * Flush all items on a server
     * Return the result
     *
     * @param string $server Hostname
     * @param int    $port   Hostname Port
     * @param int    $delay  Delay before flushing server
     *
     * @return string
     */
    public function flush_all($server, $port, $delay)
    {
        // Adding server
        self::$_memcache->addServer($server, $port);

        // Executing command : delete
        self::$_memcache->flush($delay);

        return self::$_memcache->getResultMessage();
    }

    /**
     * Search for item
     * Return all the items matching parameters if successful, false otherwise
     *
     * @param string $server Hostname
     * @param int    $port   Hostname Port
     * @param mixed  $search
     * @param bool   $level
     * @param bool   $more
     *
     * @return array
     *
     * @throws \Exception
     */
    public function search($server, $port, $search, $level = false, $more = false)
    {
        throw new \Exception('PECL Memcached does not support search function, use Server instead');
    }

    /**
     * Execute a telnet command on a server
     * Return the result
     *
     * @param string $server  Hostname
     * @param int    $port    Hostname Port
     * @param string $command Command to execute
     *
     * @return string
     *
     * @throws \Exception
     */
    public function telnet($server, $port, $command)
    {
        throw new \Exception('PECL Memcached does not support telnet, use Server instead');
    }
}
