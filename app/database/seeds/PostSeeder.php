<?php

class PostSeeder extends Seeder {

    public function run()
    {
        DB::table('posts')->delete();

        Post::create(array(
        	'user_id' 		=> '1',
        	'title' 		=> 'First Post',
        	'slug' 			=> 'first_post',
            'description'   => 'This is my first post',
            'image'         => 'img/image1.jpg',
            'published_at'  => '2013-10-24 10:10:10',
            'published'     => 1,
            'content'       => '<p>She closed the door, locked it, and put the key carefully in the pocket of her dress.  And so, with Toto trotting along soberly behind her, she started on her journey.</p> <h2>Some takeaways</h2> <p>There were several roads near by, but it did not take her long to find the one paved with yellow bricks.  Within a short time she was walking briskly toward the Emerald City, her silver shoes tinkling merrily on the hard, yellow road-bed.  The sun shone bright and the birds sang sweetly, and Dorothy did not feel nearly so bad as you might think a little girl would who had been suddenly whisked away from her own country and set down in the midst of a strange land.</p><p>She was surprised, as she walked along, to see how pretty the country was about her.  There were neat fences at the sides of the road, painted a dainty blue color, and beyond them were fields of grain and vegetables in abundance.  Evidently the Munchkins were good farmers and able to raise large crops.  Once in a while she would pass a house, and the people came out to look at her and bow low as she went by; for everyone knew she had been the means of destroying the Wicked Witch and setting them free from bondage.  The houses of the Munchkins were odd-looking dwellings, for each was round, with a big dome for a roof. All were painted blue, for in this country of the East blue was the favorite color.</p>',
        ));

        Post::create(array(
            'user_id'       => '1',
            'title'         => 'Second Post',
            'slug'          => 'second_post',
            'description'   => 'This is my Second post',
            'image'         => 'img/image2.jpg',
            'published_at'  => '2013-10-26 10:15:10',
            'published'     => 1,
            'content'       => '<p>She closed the door, locked it, and put the key carefully in the pocket of her dress.  And so, with Toto trotting along soberly behind her, she started on her journey.</p> <h2>Some takeaways</h2> <p>There were several roads near by, but it did not take her long to find the one paved with yellow bricks.  Within a short time she was walking briskly toward the Emerald City, her silver shoes tinkling merrily on the hard, yellow road-bed.  The sun shone bright and the birds sang sweetly, and Dorothy did not feel nearly so bad as you might think a little girl would who had been suddenly whisked away from her own country and set down in the midst of a strange land.</p><p>She was surprised, as she walked along, to see how pretty the country was about her.  There were neat fences at the sides of the road, painted a dainty blue color, and beyond them were fields of grain and vegetables in abundance.  Evidently the Munchkins were good farmers and able to raise large crops.  Once in a while she would pass a house, and the people came out to look at her and bow low as she went by; for everyone knew she had been the means of destroying the Wicked Witch and setting them free from bondage.  The houses of the Munchkins were odd-looking dwellings, for each was round, with a big dome for a roof. All were painted blue, for in this country of the East blue was the favorite color.</p>',
        ));

        Post::create(array(
            'user_id'       => '1',
            'title'         => 'Third Post',
            'slug'          => 'third_post',
            'description'   => 'This is my Third post',
            'image'         => 'img/image3.jpg',
            'published_at'  => '2013-10-26 10:15:10',
            'published'     => 1,
            'content'       => '<p>She closed the door, locked it, and put the key carefully in the pocket of her dress.  And so, with Toto trotting along soberly behind her, she started on her journey.</p> <h2>Some takeaways</h2> <p>There were several roads near by, but it did not take her long to find the one paved with yellow bricks.  Within a short time she was walking briskly toward the Emerald City, her silver shoes tinkling merrily on the hard, yellow road-bed.  The sun shone bright and the birds sang sweetly, and Dorothy did not feel nearly so bad as you might think a little girl would who had been suddenly whisked away from her own country and set down in the midst of a strange land.</p><p>She was surprised, as she walked along, to see how pretty the country was about her.  There were neat fences at the sides of the road, painted a dainty blue color, and beyond them were fields of grain and vegetables in abundance.  Evidently the Munchkins were good farmers and able to raise large crops.  Once in a while she would pass a house, and the people came out to look at her and bow low as she went by; for everyone knew she had been the means of destroying the Wicked Witch and setting them free from bondage.  The houses of the Munchkins were odd-looking dwellings, for each was round, with a big dome for a roof. All were painted blue, for in this country of the East blue was the favorite color.</p>',
        ));
    }
}