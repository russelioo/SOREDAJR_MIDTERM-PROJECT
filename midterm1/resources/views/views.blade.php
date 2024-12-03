@extends('Components.Layout')

@section('title', 'Views')

@section('content') 

<!-- Set a blue background for the entire section -->
<section class="home-heading" style="background-color: #007bff; padding: 20px;">

    <div class="heading"></div>
    <div class="heading"></div> 

    <div class="feature">
        <div class="feature-box">
            <div style="background-color: white; padding: 20px; margin: 10px 0; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <h1>What is Views?</h1>
                <p>Views are the components that handle the presentation of data to users. They format and display content on the webpage using HTML, CSS, and sometimes JavaScript, focusing on how information looks and feels to the user.</p>
            </div>
        </div>
    </div>

    <div class="feature">
        <div class="feature-box">
            <div style="background-color: white; padding: 20px; margin: 10px 0; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <h1>What are my Understanding about Views?</h1>
                <p>Based on my understanding: Views in web development are the parts of a website that users see and interact with. They define how content is displayed on the screen, like text, images, and buttons. Views take data from the server and present it in a user-friendly format, often using HTML, CSS, and JavaScript. This helps create the visual layout and design of a website or application.</p>

                </div>
            </div>
        </div>
    </div>

    <div style="background-color: white; padding: 20px; margin: 10px 0; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <div style="text-align: center;">
            <h2>Example of <span style="color: #d9534f;">Views</span></h2>
            <img src="{{ asset('css/Views.png') }}" alt="">
        </div>
    </div>

</section>

@endsection
