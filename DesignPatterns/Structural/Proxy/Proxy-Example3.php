<?php 

interface Image {
    public function displayImage();
}

// On System A
class RealImage implements Image {

    private $filename = null;
    /**
     * Constructor
     * @param $filename
     */
    public function __construct($filename) {
        $this->filename = $filename;
        $this->loadImageFromDisk();
    }

    /**
     * Loads the image from the disk
     */
    private function loadImageFromDisk() {
        echo "Loading {$this->filename} \r\n";
    }

    /**
     * Displays the image
     */
    public function displayImage() {
    	echo "Displaying {$this->filename} \r\n";
    }

}

// On System B
class ProxyImage implements Image {

    private $image = null;
    private $filename = null;
    /**
     * Constructor
     * @param $filename
     */
    public function __construct($filename) {
        $this->filename = $filename;
    }

    /**
     * Displays the image
     */
    public function displayImage() {
        if ($this->image == null) {
           $this->image = new RealImage($this->filename);
        }
        $this->image->displayImage();
    }

}


$image1 = new ProxyImage("HiRes_10MB_Photo1");
$image2 = new ProxyImage("HiRes_10MB_Photo2");

$image1->displayImage(); // loading necessary
$image1->displayImage(); // loading unnecessary
$image2->displayImage(); // loading necessary
$image2->displayImage(); // loading unnecessary
$image1->displayImage(); // loading unnecessary