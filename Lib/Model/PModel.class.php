<?php

class  PModel extends  Model
{
    public function getTableName()
    {
        if(empty($this->trueTableName)) {
            $tableName  = !empty($this->tablePrefix) ? $this->tablePrefix : '';
            if(!empty($this->tableName)) {
                $tableName .= $this->tableName;
            }else{
                $tableName .= parse_name($this->name);
            }

           $this->trueTableName    =   $this->name;//不进行小写转换
        }
        return (!empty($this->dbName)?$this->dbName.'.':'').$this->trueTableName;
    }
}