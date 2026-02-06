<!-- Our Team Section Start -->
@if (isset($teamMembers) && count($teamMembers) > 0)
    <div class="our-team">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title dark-section">
                        <h3 class="wow fadeInUp">Đội ngũ</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Đội ngũ chuyên&nbsp;gia
                        </h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                @foreach ($teamMembers->take(4) as $index => $member)
                    <div class="col-lg-3 col-md-6">
                        <!-- Team Item Start -->
                        <div class="team-item wow fadeInUp"
                            @if ($index > 0) data-wow-delay="{{ $index * 0.2 }}s" @endif>
                            <!-- Team Image Start -->
                            <div class="team-image">
                                <a href="{{ route('about') }}#team" data-cursor-text="Xem">
                                    <figure class="image-anime">
                                        <img src="{{ asset($member->avatar ?? 'images/team-1-env.png') }}"
                                            alt="{{ $member->name }}">
                                    </figure>
                                </a>

                                <!-- Team Social Icon Start -->
                                <div class="team-social-icon">
                                    <ul>
                                        @if (!empty($member->social_links['linkedin']))
                                            <li><a href="{{ $member->social_links['linkedin'] }}" target="_blank"><i
                                                        class="fab fa-linkedin-in"></i></a></li>
                                        @endif
                                        @if (!empty($member->social_links['email']))
                                            <li><a href="mailto:{{ $member->social_links['email'] }}"><i
                                                        class="fa-solid fa-envelope"></i></a></li>
                                        @endif
                                        @if (!empty($member->social_links['facebook']))
                                            <li><a href="{{ $member->social_links['facebook'] }}" target="_blank"><i
                                                        class="fab fa-facebook-f"></i></a></li>
                                        @endif
                                    </ul>
                                </div>
                                <!-- Team Social Icon End -->
                            </div>
                            <!-- Team Image End -->

                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3><a href="{{ route('about') }}#team">{{ $member->name }}</a></h3>
                                <p>{{ $member->position }}</p>
                            </div>
                            <!-- Team Content End -->
                        </div>
                        <!-- Team Item End -->
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
<!-- Our Team Section End -->
