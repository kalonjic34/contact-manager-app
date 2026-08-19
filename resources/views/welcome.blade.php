@extends('layouts.public')

@section('content')

<div class="landing-hero py-5">
        <div class="px-4 my-5 text-center">
            <span class="eyebrow">Your people, beautifully organized</span>
            <h1 class="display-5 fw-bold mt-3">A calmer way to manage every connection.</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Keep your network in sync, searchable, and ready for the next conversation.</p>
                <div class="d-flex justify-content-sm-center">
                    <a href="#" class="btn btn-primary btn-lg mr-2">Start for free</a>
                    <a href="#" class="btn btn-outline-secondary btn-lg">See how it works</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4">
                <span class="feature-number">01</span>
                <h3>Trust your data</h3>
                <p>Your contacts stay protected, backed up, and ready when you need them.</p>
            </div>
            <div class="col-lg-4">
                <span class="feature-number">02</span>
                <h3>Find the right person</h3>
                <p>Use notes, tags, and fast search to turn a crowded address book into a clear view.</p>
            </div>
            <div class="col-lg-4">
                <span class="feature-number">03</span>
                <h3>Show up on time</h3>
                <p>Helpful reminders keep birthdays and important follow-ups from slipping past.</p>
            </div>
        </div>
    </div>
    <section class="pricing-section">
        <div class="container py-5">
            <h2 class="text-center my-5">Simple plans for growing circles.</h2>
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Free</h4>
                    </div>
                    <div class="card-body">
                        <h3 class="pricing-card-title">$0 <small class="text-muted">/ mo</small></h3>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>1,000 contacts</li>
                            <li>Sync 1 account</li>
                            <li>Core features</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm plan-featured">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Pro</h4>
                    </div>
                    <div class="card-body">
                        <h3 class="pricing-card-title">$9 <small class="text-muted">/ mo</small></h3>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>25,000 contacts</li>
                            <li>Sync 5 accounts</li>
                            <li>Smart reminders</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
                    </div>
                </div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Enterprise</h4>
                    </div>
                    <div class="card-body">
                        <h3 class="pricing-card-title">$15 <small class="text-muted">/ mo</small></h3>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>50,000 contacts</li>
                            <li>Sync 7 accounts</li>
                            <li>Advanced features</li>
                        </ul>
                        <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection