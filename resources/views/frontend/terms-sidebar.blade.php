<div class="sidebar">
    <aside class="services-sidebar">
        <div class="row gy-4">
            <div class="col-lg-12 col-md-12">
                <!-- Services Widget -->
                <div class="sidebar-widget services-widget">
                    <div class="widget-inner">
                        <ul>
                            <li class="{{ Request::routeIs('disclaimer') ? 'active' : '' }}">
                                <a href="{{ route('disclaimer') }}">Disclaimer</a>
                            </li>
                            <li class="{{ Request::routeIs('terms_and_conditions') ? 'active' : '' }}">
                                <a href="{{ route('terms_and_conditions') }}">Terms & Conditions</a>
                            </li>
                            <li class="{{ Request::routeIs('privacy_policy') ? 'active' : '' }}">
                                <a href="{{ route('privacy_policy') }}">Privacy Policy</a>
                            </li>
                            <li class="{{ Request::routeIs('refund_policy') ? 'active' : '' }}">
                                <a href="{{ route('refund_policy') }}">Refund Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</div>
