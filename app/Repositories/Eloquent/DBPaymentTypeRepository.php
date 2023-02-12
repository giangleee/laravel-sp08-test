<?php

namespace App\Repositories\Eloquent;

use App\Models\PaymentType;
use App\Repositories\BaseRepository;
use App\Repositories\PaymentTypeRepository;

class DBPaymentTypeRepository extends BaseRepository implements PaymentTypeRepository {

    public function model()
    {
        return PaymentType::class;
    }

    public function getPaymentTypes()
    {
        return $this->model->all(['payment_type', 'status']);
    }

    public function updateStatus($method)
    {
        $this->model->whereIn("payment_type", $method)->update([
            'status' => PaymentType::$STATUS_OFF
        ]);

        $this->model->whereNotIn("payment_type", $method)->update([
            'status' => PaymentType::$STATUS_ON
        ]);

        return $this->model->all();
    }
}
