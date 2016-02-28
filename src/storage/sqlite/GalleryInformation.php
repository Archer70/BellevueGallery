<?php
namespace Bellevue\src\storage\sqlite;
use Bellevue\src\library_interfaces\information_storage\GalleryInformationStorage;
use PDO;

class GalleryInformation implements GalleryInformationStorage
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('sqlite:' . __DIR__ . '/database/database.db');
    }

    public function getPhotosInGallery($id)
    {
        $statement = $this->db->prepare('
            SELECT id, title, description, filename, gallery
            FROM photos
            WHERE gallery = :gallery'
        );
        $statement->bindParam(':gallery', $id, PDO::PARAM_INT);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        $statement->closeCursor();
        return $result;
    }
}
