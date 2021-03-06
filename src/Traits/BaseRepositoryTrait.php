<?php

namespace Mawuekom\RepositoryLayer\Traits;

/**
 * Base repository trait
 * 
 * Trait BaseRepositoryTrait
 * 
 * @package Mawuekom\RepositoryLayer\Traits
 */
trait BaseRepositoryTrait
{
    /**
     * Get all model's data 
     * 
     * @param array $columns
     * 
     * @return mixed
     */
    public function all($columns = ['*'])
    {
        return $this ->model ->get($columns);
    }

    /**
     * Retrieve the list of data and can add some adjustments to it
     * Like model's relations...
     * 
     * @param string $orderByColumn
     * @param string $orderBy
     * @param array $with
     * @param array $columns
     * 
     * @return mixed
     */
    public function list($orderByColumn, $orderBy = 'desc', $with = [], $columns = ['*'])
    {
        return $this ->model ->with($with)
                             ->orderBy($orderByColumn, $orderBy)
                             ->get($columns);
    }

    /**
     * Create new data
     * 
     * @param array $data
     * 
     * @return mixed
     */
    public function create(array $data)
    {
        return $this ->model ->create($data);
    }

    /**
     * Update data by one attribute
     * 
     * @param string $attribute
     * @param string|int $id
     * @param array $data
     * 
     * @return mixed
     */
    public function update(string $attribute, $id, array $data)
    {
        return $this ->model ->where($attribute, '=', $id) ->update($data);
    }

    /**
     * Update data by some params
     * 
     * @param array $params
     * @param array $data
     * 
     * @return mixed
     */
    public function updateBy(array $params, array $data)
    {
        return $this ->model ->where($params) ->update($data);
    }

    /**
     * Delete data by ID
     * 
     * @param int $id
     * 
     * @return mixed
     */
    public function delete($id)
    {
        return $this ->model ->destroy($id);
    }

    /**
     * Delete data by some params
     * 
     * @param array $params
     * 
     * @return mixed
     */
    public function deleteBy(array $params)
    {
        return $this ->model ->where($params) ->delete();
    }

    /**
     * Search data
     * 
     * @param string|int $searchTerm
     * 
     * @return mixed
     */
    public function search($searchTerm)
    {
        return $this ->model 
                     ->whereLike($this ->searchFields(), $searchTerm) 
                     ->get();
    }

    /**
     * Find data by ID
     * 
     * @param int $id
     * @param array $columns
     * 
     * @return mixed
     */
    public function find($id, $columns = ['*'])
    {
        return $this ->model ->find($id, $columns);
    }

    /**
     * Find data by some params
     * 
     * @param array $params
     * @param array $columns
     * 
     * @return mixed
     */
    public function findBy(array $params, $columns = ['*'])
    {
        return $this ->model ->where($params)
                             ->select($columns)
                             ->first();
    }

    /**
     * Find all data by some params
     * 
     * @param array $params
     * @param array $columns
     * 
     * @return mixed
     */
    public function findAllBy(array $params, $columns = ['*'])
    {
        return $this ->model ->where($params)
                             ->select($columns)
                             ->get();
    }

    /**
     * Get data paginated
     * 
     * @param int $perPages
     * 
     * @return mixed
     */
    public function paginate($perPages = 15)
    {
        return $this ->model ->paginate($perPages);
    }
}