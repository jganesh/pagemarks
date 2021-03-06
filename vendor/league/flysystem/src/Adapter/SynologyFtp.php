<?php

namespace League\Flysystem\Adapter;

class SynologyFtp extends FTP
{

    public function getMetadata($path)
    {
        if (empty($path) ||  ! ($object = ftp_raw($this->getConnection(), 'STAT ' . $path)) || count($object) < 3) {
            return false;
        }

        if (substr($object[1], 0, 5) === "ftpd:") {
            return false;
        }

        return $this->normalizeObject($object[1], '');
    }

    protected function listDirectoryContents($directory, $recursive = true)
    {
        $listing = ftp_rawlist($this->getConnection(), $directory, $recursive);

        if ($listing === false || (!empty($listing) && substr($listing[0], 0, 5) === "ftpd:")) {
            return array();
        }

        return $this->normalizeListing($listing, $directory);
    }
}
