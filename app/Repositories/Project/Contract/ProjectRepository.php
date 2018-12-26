<?php
namespace App\Repositories\Project\Contract;

interface ProjectRepository
{
    public function save($data);

    public function getAllData();

    public function destroy();

    public function getOne($slug);
}
