@extends('layouts.app')

@section('content')
   <section class="py-5">
        <div class="container">
        <h5 class="heading-title pt-5">Frequently Asked Questions</h5>
        <div class="card card-body bg-primary">
           <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-center" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                       <span class="text-primary">1. What is LevelUp?</span>
                    </button>
                </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                   <p class="card-text">
                      It is a global crowdfunding platform that facilitates peer to peer payments between participants in our community..
                   </p>
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    2.How Can I Participate?
                    </button>
                </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                   <p class="card-text">To get started fill out the registration form using the referral link provided by your sponsor.</p>
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    3.How Can I make money?
                    </button>
                </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <p class="card-text">
                       Check out “How it Works” on the Homepage. This will translate the step by step guide on how you can make money with Betaprofitss
                    </p>
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    4.Can I sign up without a Sponsor?
                    </button>
                </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <p class="card-text">
                       It is impossible to sign up without a sponsor. All registration is done using a referral link of your sponsor.
                    </p>
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        5.How many levels can I purchase?
                    </button>
                </h2>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <p class="card-text">
                      You can purchase Level 1 – Level 8 in a sequential order while onboard before even attracting referrals. There are not limitations or restrictions on purchasing all levels.
                    </p>
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapsSix" aria-expanded="false" aria-controls="collapsSix">
                        6.How many members (referrals) <br class="mobile-break">can I invite?
                    </button>
                </h2>
                </div>
                <div id="collapsSix" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <p class="card-text">
                      There are no limits to number(s) of referrals you can invite into the Betaprofitss community. The more members you refer with your referral link, the higher chances of filling up your matrix.
                    </p>
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    7.What is Spillover?
                    </button>
                </h2>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <p class="card-text">
                       These are referrals obtained from your upline efforts which are not directly referred by you but automatically falls into your matrix.
                    </p>
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    8.Can I purchase level 2 and level 3 <br class="mobile-break">without purchasing level 1?
                    </button>
                </h2>
                </div>
                <div id="collapseEight" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <p class="card-text">
                      All levels are purchased in a sequential order. You can’t skip a level to purchase the next.
                    </p>
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                    9.Can I purchase all levels ahead <br class="mobile-break">before I attract referrals?
                    </button>
                </h2>
                </div>
                <div id="collapseNine" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <p class="card-text">
                      Yes, certainly you can purchase all levels before your referral are positioned in the matrix. This opens more earning opportunities for you.
                    </p>
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                        10.What happens if my referrals<br class="mobile-break"> don’t purchase higher levels?
                    </button>
                </h2>
                </div>
                <div id="collapseTen" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <p class="card-text">
                      The system mandates all participants to upgrade the next level the moment they receive payment(s) equal to the cost of the next level activation. As a security measure for the longevity of the program, the system is set up to encourage all members to earn from all levels by activating Level 1 through Level 8.
                    </p>
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                    11. Do I need referrals to earn?
                    </button>
                </h2>
                </div>
                <div id="collapseEleven" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <p class="card-text">
                      It is possible for you to earn when you have personally not sponsored or invited anyone. There is no guarantee that you will earn if you don’t refer anyone as it only dependent on the activities and effort from your other team members within your matrix if you choose not to personally refer anyone.
                    </p>
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                    3.How Can I make money?
                    </button>
                </h2>
                </div>
                <div id="collapseTwelve" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <p class="card-text">
                       Check out “How it Works” on the Homepage. This will translate the step by step guide on how you can make money with Betaprofitss
                    </p>
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseTenteen" aria-expanded="false" aria-controls="collapseTenteen">
                    12. What is an expired account?
                    </button>
                </h2>
                </div>
                <div id="collapseTenteen" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <p class="card-text">
                      An account becomes expired on all levels if participants don’t upgrade levels when required. The system will only require you to upgrade your package starting from level 2 and above. This upgrade is prompted the moment participants have received payment equal to the cost of the next upgrade level.
                    </p>
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                    13. What happens to my expired <br class="mobile-break">account?
                    </button>
                </h2>
                </div>
                <div id="collapseFourteen" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <p class="card-text">
                      When a participant’s account becomes expired, the participants would not be able receive payments from other members. Such member will automatically be displaced from the matrix.
                    </p>
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                    14.Can I invite referrals on my <br class="mobile-break">free membership account?
                    </button>
                </h2>
                </div>
                <div id="collapseFifteen" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <p class="card-text">
                      Yes, you can, but they will become referrals and count for other active participants in the system since you are not officially ACTIVE. We recommend you upgrade your free membership account before you invite referrals.
                    </p>
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-center collapsed" type="button" data-toggle="collapse" data-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                    15.Is Betaprofitss Legal?
                    </button>
                </h2>
                </div>
                <div id="collapseSixteen" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                    <p class="card-text">
                      Yes, Betaprofitss is legal as all transactions and payment(s) and voluntary. Our Peer to Peer program has no hidden charges nor do we withhold or control members payment(s). We are licensed & certified.
                    </p>
                </div>
                </div>
            </div>
        </div>
        </div>

        @include('layouts.footer')
    </div>
   </section>
@endsection
