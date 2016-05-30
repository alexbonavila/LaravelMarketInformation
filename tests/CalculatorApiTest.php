<?php

use App\SimulatorHistory;
use App\User;
use Chrisbjr\ApiGuard\Models\ApiKey;
use Faker\Factory;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


/**
 * Class CalculatorApiTest
 */
class CalculatorApiTest extends TestCase
{

    use DatabaseMigrations;

    /**
     * Create fake user
     *
     * @return mixed
     */
    public function testCreateUser()
    {
        $user = factory(App\User::class)->create();
        $user->apiKey = $this->CreateApiKeyUser($user);

        return $user;
    }

    /**
     * Create API Key User
     *
     * @param User $user
     * @return mixed
     */
    private function CreateApiKeyUser(User $user)
    {
        $apiKey = ApiKey::make($user->id);
        $apiKey->save();
        return $apiKey->key;
    }

    /**
     * Store Fake Calculation
     * @return \App\SimulatorHistory
     * @internal param $user
     */
    public function testCreateFakeCalcul()
    {
        $user=$this->testCreateUser();

        $faker = Factory::create();
        $calcul = new SimulatorHistory();

        $calcul->name = $faker->sentence;
        $calcul->quantity_to_buy = $faker->randomDigitNotNull;
        $calcul->quote_to_buy = $faker->randomDigitNotNull;
        $calcul->price_to_buy = $faker->randomDigitNotNull;
        $calcul->quantity_to_sell = $faker->randomDigitNotNull;
        $calcul->quote_to_sell = $faker->randomDigitNotNull;
        $calcul->tax_percent_to_discount = $faker->randomDigitNotNull;
        $calcul->price_to_sell = $faker->randomDigitNotNull;
        $calcul->gains_or_losses = $faker->randomDigitNotNull;

        $user->getCalculations()->save($calcul);
        return $calcul;
    }

}
