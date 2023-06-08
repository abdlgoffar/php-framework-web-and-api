<?php
class StudentController
{

    /**
     * REST CONTROLLER METHOD
     * find
     */
    public function findAll(): void
    {
        echo "student/ find all";
    }

    public function findOneById($id): void
    {
        echo "student/ find one by id: $id";
    }
    public function findOneByName($name): void
    {
        echo "student/ find one by name: $name";
    }
    /**
     * REST CONTROLLER METHOD
     * create or add
     */
    public function create(): void
    {
        echo "student/ create";
    }
    public function add(): void
    {
        echo "student/ add";
    }
    /**
     * REST CONTROLLER METHOD
     * update
     */
    public function updateOneById($id): void
    {
        echo "student/ update one by id: $id";
    }

    public function updateOneByName($name): void
    {
        echo "student/ update one by name: $name";
    }
    /**
     * REST CONTROLLER METHOD
     * delete
     */
    public function deleteOneById($id): void
    {
        echo "student/ delete one by id: $id";
    }

    public function deleteOneByName($name): void
    {
        echo "student/ delete one by name: $name";
    }
    /**
     * WEB CONTROLLER METHOD
     * all
     */
    public function all()
    {
        echo "all";
    }
}
