@extends('frontend.layout.app')
@section('content')
@section('title', "Disclaimer")


    <section class="page-banner">
        <div class="banner-content">
            <div class="container">
                <div class="row gy-4 align-items-center">
                    <div class="col-lg-6">
                        <span class="banner-title">Disclaimer</span>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Disclaimer</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6">
                        <div class="img-box">
                            <img src="<?php echo url(''); ?>/public/frontend/assets/images/page-banner-img1.webp"
                                alt="Association of Chartered Certified Accountants">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="privacy-policy">
        <div class="container">
            <div class="row gy-4 ">
                <div class="col-lg-9">
                    <h1 class="privacy-main-title text-center">Disclaimer</h1>
                    <h5 class="privacy-title">General Disclaimer</h5>
                    <p class="privacy-text">The documents and graphics on this website could include technical inaccuracies
                        or typographical errors. Changes are periodically added to the information herein. ARA EDUCATION may
                        make improvements and/or changes herein at any time. ARA EDUCATION makes no representations about
                        the accuracy of the information contained in the documents and graphics on this web site for any
                        purpose. All documents and graphics are provided "as is". ARA EDUCATION hereby disclaims all
                        warranties and conditions with regard to this information, including all implied warranties and
                        conditions of merchantability, fitness for any particular purpose, title and non-infringement. In no
                        event, ARA EDUCATION and/or its licensor/supplier shall not be liable to any party for any direct,
                        indirect, special or other consequential damages for any use of the sites, the information, or on
                        any other hyperlinked web site, including, without limitation, any lost profits, business
                        interruption, loss of programs or other data on your information handling system or otherwise, even
                        if ARA EDUCATION is expressly advised of the possibility of such damages.</p>
                    <h5 class="privacy-title">Terms of Use</h5>
                    <p class="privacy-text">The following terms and conditions will be deemed to have been accepted by the
                        User on usage of the website&nbsp;http://www.araeducation.in You are requested to read them
                        carefully before you use the services of this site.<br>

                        The term User shall refer to the user who is browsing the Site. The term Site refers to
                        www.araeducation.in and other websites, owned and monitored by ARA EDUCATION.<br>
                        By using the Site, you agree to follow and be bound by the following terms and conditions concerning
                        your use of the Site. ARA EDUCATION may revise the Terms of Use at any time without notice to you.
                        Areas of the Site may have different terms of use posted. If there is a conflict between the Terms
                        of Use and terms of use posted for a specific area of the Site, the latter shall have precedence
                        with respect to your use of that area of the Site.<br>
                        All content present on this site is the exclusive property of ARA EDUCATION. The software, text,
                        images, graphics, video and audio used on this site belong to ARA EDUCATION. No material from this
                        site may be copied, modified, reproduced, republished, uploaded, transmitted, posted or distributed
                        in any form whatsoever without prior written permission from ARA EDUCATION. All rights not expressly
                        granted herein are reserved. Unauthorized use of the materials appearing on this site may violate
                        copyright, trademark and other applicable laws, and could result in criminal and/or civil penalties.
                        ARA EDUCATION is a registered trademark of ARA EDUCATION. This trademark may not be used in any
                        manner without prior written consent from ARA EDUCATION.<br>
                        ARA EDUCATION does not make any warranties, express or implied, including without limitation, those
                        of merchantability and fitness for a particular purpose, with respect to any information, data,
                        statements or products made available on the Site.<br>
                        ARA EDUCATION does not accept any responsibility towards the contents and/or information practices
                        of third party Sites which have links through ARA EDUCATION's Site. The said links to internal or
                        external Web site locations are only for the purpose of facilitating your visit or clarify your
                        query.<br>
                        The Site, and all content, materials, information, software, products and services provided on the
                        Site, are provided on an "as is" and "as available" basis. ARA EDUCATION expressly disclaims all
                        warranties of any kind, whether express or implied, including, but not limited to, the implied
                        warranties of merchantability, fitness for a particular purpose and non-infringement.<br>
                        ARA EDUCATION shall have no responsibility for any damage to a User's computer system or loss of
                        data that result from the download of any content, materials, information from the Site.<br>
                        In no event will ARA EDUCATION be liable for damages of any kind, including without limitation,
                        direct, incidental or consequential damages (including, but not limited to, damages for lost
                        profits, business interruption and loss of programs or information) arising out of the use of or
                        inability to use ARA EDUCATION's Web site, or any information provided on the Web site, or in the
                        Products any claim attributable to errors, omissions or other inaccuracies in the Product or
                        interpretations thereof. Some jurisdictions do not allow the limitation or exclusion of liability.
                        Accordingly, some of the above limitations may not apply to the User.<br>
                        The User agrees to indemnify, defend and hold ARA EDUCATION harmless from and against all losses,
                        expenses, damages and costs, including reasonable attorneys' fees, arising out of or relating to any
                        misuse by the User of the content and services provided on the Site.<br>
                        The information contained in the Site has been obtained from sources believed to be reliable. ARA
                        EDUCATION disclaims all warranties as to the accuracy, completeness or adequacy of such
                        information.<br>
                        ARA EDUCATION makes no warranty that: (a) the Site will meet your requirements; (b) the Site will be
                        available on an uninterrupted, timely, secure, or error-free basis; (c) the results that may be
                        obtained from the use of the Site or any services offered through the Site will be accurate or
                        reliable.<br>
                        The User's right to privacy is of paramount importance to ARA EDUCATION. Any information provided by
                        the User will not be shared with any third party. ARA EDUCATION reserves the right to use the
                        information to provide the User a more personalized online experience.<br>
                        The Site provides links to Web sites and access to content, products and services from third
                        parties, including users, advertisers, affiliates and sponsors of the Site. You agree that ARA
                        EDUCATION is not responsible for the availability of, and content provided on, third party Web
                        sites. The User is requested to peruse the policies posted by other Web sites regarding privacy and
                        other topics before use. ARA EDUCATION is not responsible for third party content accessible through
                        the Site, including opinions, advice, statements and advertisements and User shall bear all risks
                        associated with the use of such content. ARA EDUCATION is not responsible for any loss or damage of
                        any sort that a User may incur from dealing with any third part.</p>
                </div>
                <div class="col-lg-3">
                    @include('frontend.terms-sidebar')
                </div>
            </div>
        </div>
    </section>




    @include('frontend.newsletter')


@endsection