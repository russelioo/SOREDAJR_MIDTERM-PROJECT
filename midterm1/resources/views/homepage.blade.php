<!-- resources/views/homepage.blade.php -->
@extends('Components.Layout')

@section('title', 'Home Page')

@section('content')

<!-- Hero Section with Blue Artistic Style -->
<section class="hero" style="position: relative; background: linear-gradient(to right, rgba(0, 0, 255, 0.6), rgba(0, 0, 255, 0.4)), url('{{ asset('images/your-background-image.jpg') }}'); background-size: cover; color: white; text-align: center; padding: 100px 20px; border-bottom: 3px solid #0066cc; max-width: 100%; overflow: hidden;">
    <div class="home-bg-blur" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0, 0, 0, 0.4); z-index: -1;"></div>
    <div class="home-content" style="position: relative; z-index: 1;">
        <h1 style="font-size: 3.5em; font-weight: bold; margin-bottom: 20px;">Welcome to My Portfolio, {{ $username }}!</h1>
        <h2 style="font-size: 1.5em; font-weight: normal; margin-bottom: 20px;">Hello, and thank you for visiting! My name is John Russel N. Soreda, a student pursuing BSIT - 3C. This portfolio showcases my work, skills, and passion for web development. Here, you’ll find various projects I’ve worked on, including my recent midterm project which covers concepts such as middleware, layout, routes, and views. Each project reflects my dedication to learning and applying key principles of web development.

I hope you enjoy browsing through my work, and I look forward to connecting with you. Feel free to reach out if you have any questions or would like to collaborate. Thank you for your time, and I hope you find my portfolio insightful!


        </h2>

        <p style="font-size: 1.2em; font-style: italic; margin-bottom: 30px;">
            <b>"The journey of learning never ends, and every project is a step closer to mastery. With passion, persistence, and a drive for excellence, I continue to grow as a web developer."</b>
        </p>

        <!-- Insert your picture with artistic touch -->
        <img src="{{ asset('css/2x2.jpg') }}" alt="My Picture" style="border-radius: 50%; width: 150px; height: 150px; box-shadow: 0 4px 15px rgba(0, 0, 255, 0.5); margin-top: 20px;">
    </div>
</section>

<!-- Heading Section with Blue Accent -->
<section class="home-heading" style="text-align: center; padding: 50px 20px; background-color: #e0f7fa; border-top: 3px solid #0066cc; max-width: 100%; overflow: hidden;">
    <div class="heading" style="font-size: 2.5em; font-weight: bold; color: #007bff;"></div> 

    <div class="feature" style="display: flex; justify-content: center; margin-top: 30px;">
        <!-- Rectangular Feature Box -->
        <div class="feature-box" style="max-width: 600px; margin: 0 20px; border: 2px solid #0066cc; padding: 30px; background-color: #f1f9ff; box-shadow: 0 4px 6px rgba(0, 0, 255, 0.1); width: 100%;">
            <img src="{{ asset('css/Code.jpg') }}" alt="Code" style="width: 100%; border-radius: 10px;">
            <h3 style="font-size: 1.8em; margin-top: 20px; color: #333;">Introduction</h3>
            <p style="font-size: 1.1em; line-height: 1.6; color: #555;">
            My name is John Russel N. Soreda, a student of BSIT - 3C. I sincerely apologize for the delay in submitting my midterm project. My laptop was damaged on September 21 when my dog accidentally sat on it, breaking the LCD screen. I arranged for repairs, but the process was delayed due to service center errors, recent class suspensions, and Typhoon Kristine. Additionally, the necessary replacement materials had to be shipped from Manila, which took longer than expected. Last December 1 that the maintenance was fully completed, and I was able to get my laptop back. Unfortunately, I was also unable to borrow a laptop from my classmates or boardmates during this time due to their limited availability.

In my midterm project, I focused on key web development concepts such as middleware, layout, routes, and views. I implemented middleware to handle request logging and access control, ensuring that only authorized users can access certain pages. The layout of the application was designed to provide a consistent user interface across various pages, using Blade templates for efficient rendering. I also defined routes to map URLs to specific controller actions, and worked with views to display dynamic content to users. I have now completed the project and submitted it today, December 3. I kindly request your understanding regarding this matter. Thank you very much for your consideration. God bless.

        </div>
    </div>
</section>

@endsection

