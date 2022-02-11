<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $data = [
                ['category_id' => 1, 'name' => 'Enterprise Risk Management Principles', 'outline'=>'Introduction to risk management Risk management framework
                Embedding risk management in your corporate culture
                Being a successful risk manager: know your strengths
                Benefits of risk management: how to increase your performance',
                'description' => 'Day One
                Introduction to risk management
                How to define risk?
                What covers the risk management process?
                Why manage risk?
                The attributes of effective risk management that will fit your organisation
                Key risk management disciplines', 'duration'=>'14 days'],

                ['category_id' => 1, 'name' => 'Enterprise Risk Management Principles', 'outline'=>'Introduction to risk management Risk management framework
                Embedding risk management in your corporate culture
                Being a successful risk manager: know your strengths
                Benefits of risk management: how to increase your performance',
                'description' => 'Day One
                Introduction to risk management
                How to define risk?
                What covers the risk management process?
                Why manage risk?
                The attributes of effective risk management that will fit your organisation
                Key risk management disciplines', 'duration'=>'14 days'],

                ['category_id' => 1, 'name' => 'Enterprise Risk Management Principles', 'outline'=>'Introduction to risk management Risk management framework
                Embedding risk management in your corporate culture
                Being a successful risk manager: know your strengths
                Benefits of risk management: how to increase your performance',
                'description' => 'Day One
                Introduction to risk management
                How to define risk?
                What covers the risk management process?
                Why manage risk?
                The attributes of effective risk management that will fit your organisation
                Key risk management disciplines', 'duration'=>'14 days'],

                ['category_id' => 1, 'name' => 'Enterprise Risk Management Principles', 'outline'=>'Introduction to risk management Risk management framework
                Embedding risk management in your corporate culture
                Being a successful risk manager: know your strengths
                Benefits of risk management: how to increase your performance',
                'description' => 'Day One
                Introduction to risk management
                How to define risk?
                What covers the risk management process?
                Why manage risk?
                The attributes of effective risk management that will fit your organisation
                Key risk management disciplines', 'duration'=>'14 days'],

                ['category_id' => 1, 'name' => 'Enterprise Risk Management Principles', 'outline'=>'Introduction to risk management Risk management framework
                Embedding risk management in your corporate culture
                Being a successful risk manager: know your strengths
                Benefits of risk management: how to increase your performance',
                'description' => 'Day One
                Introduction to risk management
                How to define risk?
                What covers the risk management process?
                Why manage risk?
                The attributes of effective risk management that will fit your organisation
                Key risk management disciplines', 'duration'=>'14 days'],

                ['category_id' => 1, 'name' => 'Enterprise Risk Management Principles', 'outline'=>'Introduction to risk management Risk management framework
                Embedding risk management in your corporate culture
                Being a successful risk manager: know your strengths
                Benefits of risk management: how to increase your performance',
                'description' => 'Day One
                Introduction to risk management
                How to define risk?
                What covers the risk management process?
                Why manage risk?
                The attributes of effective risk management that will fit your organisation
                Key risk management disciplines', 'duration'=>'14 days'],

                ['category_id' => 1, 'name' => 'Enterprise Risk Management Principles', 'outline'=>'Introduction to risk management Risk management framework
                Embedding risk management in your corporate culture
                Being a successful risk manager: know your strengths
                Benefits of risk management: how to increase your performance',
                'description' => 'Day One
                Introduction to risk management
                How to define risk?
                What covers the risk management process?
                Why manage risk?
                The attributes of effective risk management that will fit your organisation
                Key risk management disciplines', 'duration'=>'14 days'],

                ['category_id' => 1, 'name' => 'Enterprise Risk Management Principles', 'outline'=>'Introduction to risk management Risk management framework
                Embedding risk management in your corporate culture
                Being a successful risk manager: know your strengths
                Benefits of risk management: how to increase your performance',
                'description' => 'Day One
                Introduction to risk management
                How to define risk?
                What covers the risk management process?
                Why manage risk?
                The attributes of effective risk management that will fit your organisation
                Key risk management disciplines', 'duration'=>'14 days'],

                ['category_id' => 1, 'name' => 'Enterprise Risk Management Principles', 'outline'=>'Introduction to risk management Risk management framework
                Embedding risk management in your corporate culture
                Being a successful risk manager: know your strengths
                Benefits of risk management: how to increase your performance',
                'description' => 'Day One
                Introduction to risk management
                How to define risk?
                What covers the risk management process?
                Why manage risk?
                The attributes of effective risk management that will fit your organisation
                Key risk management disciplines', 'duration'=>'14 days'],
        ];

        foreach($data as $dd){
            Course::create($dd);
        }
    }
}
