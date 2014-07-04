<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UsersTableSeeder');
        $this->call('PostTableSeeder');
	}

}

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $user = new User();
        $user->email = 'admin@codeup.com';
        $user->password = Hash::make('adminPass123!');
        $user->save();

        $user = new User();
        $user->email = 'greg@codeup.com';
        $user->password = Hash::make('adminPass123!');
        $user->save();
    }

}

class PostTableSeeder extends Seeder {

    public function run()
    {
        DB::table('posts')->delete();

        for ($i = 1; $i <= 10; $i++)
        {

        $post = new Post();
        $post->user_id = 1;
        $post->title = "Post Title $i";
        $post->body = "Post Body $i";
        $post->save();
        }
    }
}
