<?php

namespace frontend\models\pendaftaran\predatech;

use Yii;

/**
 * This is the model class for table "pendaftaran_baru".
 *
 * @property integer $id
 * @property string $nim
 * @property string $nama_lengkap
 * @property string $email
 * @property string $nomort_hp
 * @property string $alamat
 */
class PendaftaranPredatech extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pendaftaran_baru';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nim', 'nama_lengkap', 'email', 'nomor_hp', 'alamat'], 'required'],
            [['nim'], 'string', 'max' => 12],
            [['nama_lengkap', 'email', 'alamat'], 'string', 'max' => 100],
            [['nomor_hp'], 'string', 'max' => 12],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nomor Induk Mahasiswa',
            'nama_lengkap' => 'Nama Lengkap',
            'email' => 'Email',
            'nomor_hp' => 'Nomor Telephone',
            'alamat' => 'Alamat',
        ];
    }
}
