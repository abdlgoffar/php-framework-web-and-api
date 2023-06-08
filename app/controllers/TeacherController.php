<?php
class TeacherController
{
    /**
     * REST CONTROLLER METHOD
     * find
     */
    public function findAll(): void
    {
        echo "teacher/ find all";
    }

    public function findOneById($id): void
    {
        echo "teacher/ find one by id: $id";
    }
    public function findOneByName($name): void
    {
        echo "teacher/ find one by name: $name";
    }
    /**
     * REST CONTROLLER METHOD
     * create or add
     */
    public function create(): void
    {
        echo "teacher/ create";
    }
    public function add(): void
    {
        echo "teacher/ add";
    }
    /**
     * REST CONTROLLER METHOD
     * update
     */
    public function updateOneById($id): void
    {
        echo "teacher/ update one by id: $id";
    }

    public function updateOneByName($name): void
    {
        echo "teacher/ update one by name: $name";
    }
    /**
     * REST CONTROLLER METHOD
     * delete
     */
    public function deleteOneById($id): void
    {
        echo "teacher/ delete one by id: $id";
    }

    public function deleteOneByName($name): void
    {
        echo "teacher/ delete one by name: $name";
    }
}
