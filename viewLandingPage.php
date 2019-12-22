
namespace Tests\Feature;
use App\category;
//use http\Client\Curl\User;
use App\Product;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
class ViewLandingPageTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
    //this test will check if my homepage is loading correctly every time
   public function Landing_page_loads_correctly()
   {
       //Arrange
       // act
       $response= $this->get('/');
       //assert
       $response->assertStatus(200);
       $response->assertSee('login');
       $response->assertSee('Dress Rent');
   }
   /** @test */
   public function only_logged_in_users_can_see_the_user_dashboard()
   {
       $response = $this->get('/home')
       ->assertRedirect('/login');
   }
    /** @test */
    public function only_authenticated_user_can_see_the_customer_list()
    {
        $this->actingAs(factory(User::class)->create());
        $response = $this->get('/home')
            ->assertOk();
    }
    /** @test */
    //this will check if things are in right order
    public function see_In_Order(){
    $response = $this->get('/');
    $response->assertSeeInOrder(['login','register']);
}
    /**@test*/
    public function a_customer_can_be_added_through_the_form()
    {
        $this->actingAs(factory(product::class)->create());
        $response = $this->post('/admin/dashboard/products/store',[
        'title' => 'name',
        'description' => 'description',
        'price' => '400',
        'discount' =>'20',
        'thumbnail' => 'storage/upload/fileNameToStore',
        'options' =>2,
        'slug' =>1,
        ]);
        $this->assertCount(1 ,Product::all());
    }
    //this test is not working
   /*
     public function test_category_database_input()
    {
        //suppose,  i have two records in the database that are posts,
        //and each one is posting one month apart.
        $first = factory(category::class)->create();
        $second = factory(category::class)->create([
            'created_at' =>\carbon\carbon::now()->subMonth()
        ]);
        //when i fetch from the archives
        $category = Category::archives();
        dd($category);
        //then the response should be in proper format
        $this->assertCount(2,$category);
        $this->assertEquals([
            [
                "year" =>$first->created_at->format('Y'),
                "month" => $first->created_at->format('F'),
            ],[
                "year" =>$first->created_at->format('Y'),
                "month" => $first->created_at->format('F'),
            ]
        ], $category
        );
    }
    */
}