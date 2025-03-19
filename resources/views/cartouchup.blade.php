@extends('layout/structure')

@section('section')

    <header class="hero">
        <h1 class="title">Case Study Title</h1>
        <p class="subtitle">A deep dive into the problem, solution, and results.</p>
        <img src="assest/funnel-img/case study/touchuppaint.png" alt="Hero Image" class="hero-image">
    </header>

    <section class="content">
        <div class="section problem">
            <h2>The Problem</h2>
            <p>Briefly explain the issue being addressed.</p>
        </div>
        <div class="section solution">
            <h2>The Solution</h2>
            <p>Explain the approach taken to solve the problem.</p>
        </div>
        <div class="section results">
            <h2>The Results</h2>
            <p>Highlight the outcomes and impact.</p>
        </div>
        <div class="section images">
            <h2>Project Snapshots</h2>
            <div class="image-gallery">
                <img src="image1.jpg" alt="Snapshot 1" class="case-image">
                <img src="image2.jpg" alt="Snapshot 2" class="case-image">
                <img src="image3.jpg" alt="Snapshot 3" class="case-image">
            </div>
        </div>
    </section>
    @endsection