@extends('Components.Layout')

@section('title', 'lay')

@section('content') 

<!-- Apply blue background to the entire section -->
<section class="home-heading" style="background-color: #007bff; padding: 20px;">
    <div class="heading"></div> 
    <div class="heading"></div> 

    <div class="feature">
        <div class="feature-box">
            <div style="background-color: white; padding: 20px; margin: 10px 0; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <h1>What is Layout?</h1>
                <p>A layout is the overall structure and arrangement of elements on a webpage. It defines how content like headers, footers, sidebars, and main sections are organized and positioned. Layouts help ensure a consistent look across different pages, making the website easy to navigate and visually appealing.</p>
            </div>
        </div>
    </div>

    <div class="feature">
        <div class="feature-box">
            <div style="background-color: white; padding: 20px; margin: 10px 0; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <h1>What are my Understanding about Layout?</h1>
                <p>Based on my understanding: A layout in web development is the structure that organizes how elements like headers, footers, navigation menus, and content are arranged on a webpage. It provides a consistent design across the site, making it easier for users to navigate and interact with the content. Layouts ensure that a website looks clean, organized, and visually appealing on different devices.</p>
                <div class="feature-box">
                    <a href="https://github.com/erimiese/WD_LabAct2" class="check-btn">View on GitHub</a>
                </div>
            </div>
        </div>
    </div>

    <div style="background-color: white; padding: 20px; margin: 10px 0; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <div style="text-align: center;">
            <h2>Example of <span style="color: #d9534f;">Layout</span></h2>
            <img src="/css/LAYOUT2.png" alt="LAYOUT2" style="width: 100%; max-width: 400px; border-radius: 8px;">
            <img src="/css/LAYOUT3.png" alt="LAYOUT3" style="width: 100%; max-width: 400px; border-radius: 8px;">
        </div>
    </div>
</section>

@endsection
