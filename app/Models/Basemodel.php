<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    use HasFactory;

    public static function findById($id, $columns = ['*'])
    {
        return self::findBy(['id' => $id], $columns);
    }

    public static function findBy($conditions, $columns = ['*'])
    {
        return self::where($conditions)
            ->select($columns)
            ->first();
    }

    public static function findByAll($conditions, $columns = ['*'])
    {
        return self::where($conditions)
            ->select($columns)
            ->get();
    }

    public static function selectBy($conditions, $columns = ['*'])
    {
        return self::where($conditions)
            ->select($columns)
            ->get();

    }

    public static function deleteById($id)
    {
        self::deleteBy(['id' => $id]);
    }

    public static function deleteBy($conditions)
    {
        self::where($conditions)->delete();
    }

    public static function updateById($id, $values)
    {
        self::updateBy(['id' => $id], $values);
    }

    public static function updateBy($conditions, $values)
    {
        self::where($conditions)->update($values);
    }

    public static function getAll($orderBy = ['id' => 'asc'], $columns = ['*'])
    {

        return self::select($columns)
            ->orderBy(array_key_first($orderBy), $orderBy[array_key_first($orderBy)])
            ->get();
    }

    public static function getCount($conditions)
    {
        return self::where($conditions)
            ->count();
    }

    public static function isExists($conditions)
    {
        return self::where($conditions)
            ->exists();
    }

    public function loadFromRequest($request, $status = true)
    {
        if ($status) {
            $this->loadFromArray($request->all());
        } else {
            $this->loadFromArray($request);
        }
    }

    public function loadFromArray($arr)
    {
        foreach ($arr as $key => $value) {
            if (in_array($key, $this->fillable)
                || $key == 'id') {
                $this->$key = $value;
            }
        }
    }

    public static function returnResult($status = true)
    {
        if ($status) {
            return ['success' => 1];
        } else {
            return ['error' => 0];
        }
    }
}
