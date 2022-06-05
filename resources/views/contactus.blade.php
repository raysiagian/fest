@extends('layouts.main')


@section('container')
<h6>Contact Us</h6>
<h2>Social Media</h2>
@endsection


@section('section1')
@include('layouts.landingpage.section1')


<div class="div">
    <section class="upcoming-meetings" id="meetings">
        <div class="container border border-dark rounded mt-4">
            <div class="row ">
              <div class="col   align-self-center">
              <div class="col ps-4">
                <div class="accordions is-first-expanded">
                  <article class="accordion">
                      <div class="accordion-head">
                          <span>Facebook</span>
                          <span class="icon">
                              <i class="icon fa fa-chevron-right"></i>
                          </span>
                      </div>
                      <div class="accordion-body">
                          <div class="content text-justify">
                            <p class="text-muted">
                                <a href="https://www.facebook.com/Festival-Literasi-Balige-100471309265671/" class="text-reset">Facebook</a>.
                              </p>
                          </div>
                      </div>
                  </article>
                  <article class="accordion">
                      <div class="accordion-head">
                          <span>Instagram</span>
                          <span class="icon">
                              <i class="icon fa fa-chevron-right"></i>
                          </span>
                      </div>
                      <div class="accordion-body">
                          <div class="content text-justify">
                            <p class="text-muted">
                                <a href="https://www.instagram.com/festivaliterasibalige/" class="text-reset">Instagram</a>.
                              </p>
                          </div>
                      </div>
                  </article>
                  <article class="accordion">
                      <div class="accordion-head">
                          <span>Youtube</span>
                          <span class="icon">
                              <i class="icon fa fa-chevron-right"></i>
                          </span>
                      </div>
                      <div class="accordion-body">
                        <div class="content text-justify">
                            <p class="text-muted">
                                <a href="https://www.youtube.com/channel/UCi3CFKOIOU2RHmbVil9rweQ" class="text-reset">Youtube</a>.
                              </p>
                          </div>
                      </div>
                  </article>
              </div>
              </div>
            </div>
          </div>
        </section>
    </div>

    @endsection


