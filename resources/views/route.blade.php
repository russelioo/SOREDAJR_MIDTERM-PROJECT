<!-- resources/views/homepage.blade.php -->
@extends('Components.Layout')

@section('title', 'Home Page')

@section('content') 

<!-- Set a blue background for the entire page -->
<section class="home-heading" style="background-color: #007bff; padding: 20px;">

    <div class="heading"></div> 
    <div class="heading"></div> 
    
    <div class="feature">
        <div class="feature-box">
            <div style="background-color: white; padding: 20px; margin: 10px 0; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <h1>What is Routes?</h1>
                <p>Based on My Understanding:
                    Routes in web development are like instructions that tell the server what to show when someone visits a specific URL. They help load the correct page or data, such as showing the homepage at /home or user profiles at /user/:id. This makes it easier to organize how a website responds to different requests.
                </p>
            </div>
        </div>
    </div>

    <div class="feature">
        <div class="feature-box">
            <div style="background-color: white; padding: 20px; margin: 10px 0; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <h1>What are my Understanding about Routes?</h1>
                <p>In web development, I learned that routes are crucial for determining how a server responds to different HTTP requests. Routes allow a web application to define specific paths (like /home or /about) that trigger certain actions or return specific content. Using frameworks like Express.js, I can create these routes to serve different web pages or data based on the URL requested by the user. I also discovered that routes can be customized to handle different HTTP methods (GET, POST, PUT, DELETE), which are used for various purposes like retrieving data, submitting forms, or updating resources. Additionally, I learned about parameterized routes, which use dynamic placeholders (e.g., /:id) to capture values from the URL. This means I can handle multiple variations of a route with a single handler, making the application more flexible and efficient. For example, a route like /users/:userId can display details for different users based on the userId provided in the URL. Understanding how to use both static and dynamic routes, as well as query parameters (e.g., ?filter=active), is essential for creating responsive, data-driven web applications that deliver personalized content to users.</p>
                
                <div class="feature-box">
                    <a href="https://github.com/erimiese/WD_LabAct2.git" class="check-btn">View on GitHub</a>
                </div>
            </div>
        </div>
    </div>
    
    <div style="background-color: white; padding: 20px; margin: 10px 0; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <div style="text-align: center;">
            <h2>Example of <span style="color: #d9534f;">Routes</span></h2>
            <img src="{{ asset('css/ROUTES.png') }}" alt="">
        </div>
    </div>

</section>

@endsection
