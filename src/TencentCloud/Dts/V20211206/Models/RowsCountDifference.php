<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * mongodb行校验不一致详细信息
 *
 * @method string getDb() 获取数据库名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDb(string $Db) 设置数据库名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTable() 获取集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTable(string $Table) 设置集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSrcCount() 获取源端行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrcCount(integer $SrcCount) 设置源端行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDstCount() 获取目标端行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDstCount(integer $DstCount) 设置目标端行数
注意：此字段可能返回 null，表示取不到有效值。
 */
class RowsCountDifference extends AbstractModel
{
    /**
     * @var string 数据库名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Db;

    /**
     * @var string 集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Table;

    /**
     * @var integer 源端行数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SrcCount;

    /**
     * @var integer 目标端行数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DstCount;

    /**
     * @param string $Db 数据库名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Table 集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SrcCount 源端行数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DstCount 目标端行数
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Db",$param) and $param["Db"] !== null) {
            $this->Db = $param["Db"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("SrcCount",$param) and $param["SrcCount"] !== null) {
            $this->SrcCount = $param["SrcCount"];
        }

        if (array_key_exists("DstCount",$param) and $param["DstCount"] !== null) {
            $this->DstCount = $param["DstCount"];
        }
    }
}
