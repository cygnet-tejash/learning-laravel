<?php
namespace App\Repositories\Task\Contract;

interface TaskRepository
{
    public function save($data, $slug = null);

    public function getAllData();

    public function destroy($slug);

    public function getOne($slug);
}
