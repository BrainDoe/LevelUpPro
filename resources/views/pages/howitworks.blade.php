@extends('layouts.app')


@section('content')
  <div class="container">
     <section class="py-5">
       <h5 class="heading-title pt-5">LeveUp</h5>
        <p class="heading-text text-justify">
            <strong>LevelUp</strong> is a 2X8 Force Matrix plan designed to  create profit among participants.
            100% payment goes directly to members with no fees nor hidden charges.
            The 2X8 Force Matrix plan is certified and works effectively without interference.
            There are 8 LEVELS to complete within the program and each circle runs for 60 days, which implies that you can earn on each level every 60 days.
        </p>
        <h3 class="text-white text-decoration-underline py-1">How it Works!</h3>
        <div class="mb-3">
            <h4 class="text-white">Step 1</h4>
            <p class="text-white">
                You MUST have a local <strong>BANK ACCOUNT</strong> in your country of participation or a valid payment processor.
            </p>
            <h4 class="text-white">Step 2</h4>
            <p class="text-white">
                Sign up by using your Sponsors <strong>REFERRAL LINK</strong>, filling out required information on the registration form.
            </p>
            <h4 class="text-white">Step 3</h4>
            <p class="text-white text-justify">
                <strong>LOGIN</strong>, purchase your <strong>FIRST LEVEL (Level 1)</strong> by sending ₦10,000 to your first level upline using any of the payment methods listed therein. Make sure to send the exact amount shown as the receiver has a right to <strong>REJECT PAYMENT</strong> if amount is not fully paid. Send <strong>PROOF OF PAYMENT</strong> by providing transaction details (local bank payment receipts).  Any useful information to track your payment will help receiver approve this payment. Once your payment is <strong> APPROVED</strong> by your upline you will start receiving payments within the matrix.
            </p>
            <div class="imagelevel text-center mb-3">
               <img src={{ asset('images/level1.png') }} alt="Level one image" height="350px" width="350px" class="img-responsive center-block">
            </div>

            <h4 class="text-white">Step 4 <br>
                Your First Income:
            </h4>
            <p class="text-white text-justify">
               Your first <strong>2 referrals</strong> which you have directly invited (sponsored) or received as spillover from your upline will purchase their <strong>LEVEL 1 (LV1) UPGRADE</strong> from you. They will both send you <strong>₦10,000</strong> each making it a total income of <strong>₦20,000</strong>.
            </p>
            <div class="imagelevel text-center py-5">
               <img src={{ asset('images/level2.png') }} alt="Level one image" height="500px" width="600px" class="img-responsive center-block">
            </div>
            <div class="py-5">
                <h4 class="text-white">Step 5</h4>
                <p class="text-white text-justify">
                    The system will require you to purchase <strong>LEVEL 2 (LV2)</strong> the moment you have received payment equal to the amount of your next level upgrade. This is to ensure <strong>security</strong>, <strong>continuity</strong> and <strong>even distribution</strong> of payment amongst participants.
                </p>
            </div>


            <h4 class="text-white">Step 6</h4>
            <p class="text-white text-justify">
                Purchase <strong>Level 2 (LV2)</strong> from your 2nd level upline by sending payment of <strong>₦20,000</strong>. You will have <strong>24hrs</strong> to do this. Once this <strong>UPGRADE</strong> is made & <strong>APPROVED</strong>, your referrals on your 2nd line will purchase their Level 2 (LV2) <strong>UPGRADE</strong> through you, sending you a payment of <strong>₦20,000</strong> each <strong>X 4</strong> (No. of team members on your 2nd line within the matrix) giving you a total income of <strong>₦80,000</strong>.
            </p>
            <div class="imagelevel text-center py-3 mb-5">
               <img src={{ asset('images/level3.png') }} alt="Level one image" height="550px" width="650px" class="img-responsive center-block">
            </div>
            <h4 class="text-white">Step 7</h4>
            <p class="text-white text-justify">
                <strong>PURCHASE LEVEL 3 (LV3)</strong> by sending payment of <strong>₦40,000</strong> to your 3rd level upline. <strong>LEVEL 3 (LV3)</strong> is considered a <strong>LEADERSHIP LEVEL</strong>. Once this <strong>UPGRADE</strong> is made & <strong> APPROVED</strong> by your LV3 Upline, 8 participants on your 3rd line will purchase <strong>LEVEL 3 (LV3)</strong> through you. You will receive donations from <strong>SIX (6) PARTICIPANTS</strong> on your 3rd line. These members will directly send a payment of <strong>₦40,000</strong> each <strong>X 6</strong> (No. of participants on your 3rd line minus two (2) payments which will go up towards the maintenance & development of the Betaprofitss Community) giving you a total of <strong>₦240,000</strong> on <strong>LEVEL 3 (LV3)</strong>.
            </p>
            <div class="imagelevel text-center">
               <img src={{ asset('images/level4.png') }} alt="Level one image" height="650px" width="700px" class="img-responsive center-block">
            </div>
            <h4 class="text-white">Step 8</h4>
            <p class="text-white text-justify">
                PURCHASE your <strong>4th LEVEL UPGRADE</strong> from your 4th level upline by sending payment of <strong>₦80,000</strong>. <strong>LEVEL 4 (LV4)</strong> is considered a <strong>LEADERSHIP LEVEL</strong>. Once this <strong>UPGRADE</strong> is made & <strong>APPROVED</strong>, <strong>16</strong> participants on your 4th line will purchase their <strong>LEVEL 4 (LV4)</strong> upgrade through you. You will receive donations from <strong>TWELVE (12) PARTICIPANTS</strong> on your 4th line. These members will directly send payment of <strong>₦80,000</strong> each <strong>X 12</strong> (No. of participants on your 4th line minus four (4) payments which will go up towards the maintenance & development of the Betaprofitss Community) giving you a total income of <strong>₦960,000</strong>.
            </p>
            <div class="imagelevel text-center">
               <img src={{ asset('images/level5.png') }} alt="Level one image" height="650px" width="700px" class="img-responsive center-block">
            </div>
            <h4 class="text-white">Step 9</h4>
            <p class="text-white text-justify">
                <strong>PURCHASE LEVEL 5 (LV5)</strong> from your 5th level upline by sending payment of <strong> ₦160,000</strong>. <strong>LEVEL 5 (LV5)</strong> is considered a <strong>LEADERSHIP LEVEL</strong>. Once this <strong>UPGRADE</strong> is made & <strong>APPROVED</strong>, participants on your 5th line will purchase their <strong>LEVEL 5 (LV5)</strong> upgrade through you. You will receive donations from Twenty (24) Participants on your 5th line. These members will directly send a payment of <strong> ₦160,000</strong> each <strong>X 24</strong> (No. of participants on your 5th line minus eight (8) payments which will go up towards the maintenance & development of the Betaprofitss Community) giving you a total of <strong>₦3,840,000</strong> on <strong>LEVEL 5 (LV5)</strong> .

            </p>
            <div class="imagelevel text-center">
               <img src={{ asset('images/level6.png') }} alt="Level one image" height="750px" width="700px" class="img-responsive center-block">
            </div>
            <h4 class="text-white">Step 9</h4>
            <p class="text-white text-justify">
                <strong>PURCHASE LEVEL 5 (LV5)</strong> from your 5th level upline by sending payment of <strong> ₦160,000</strong>. <strong>LEVEL 5 (LV5)</strong> is considered a <strong>LEADERSHIP LEVEL</strong>. Once this <strong>UPGRADE</strong> is made & <strong>APPROVED</strong>, participants on your 5th line will purchase their <strong>LEVEL 5 (LV5)</strong> upgrade through you. You will receive donations from Twenty (24) Participants on your 5th line. These members will directly send a payment of <strong> ₦160,000</strong> each <strong>X 24</strong> (No. of participants on your 5th line minus eight (8) payments which will go up towards the maintenance & development of the Betaprofitss Community) giving you a total of <strong>₦3,840,000</strong> on <strong>LEVEL 5 (LV5)</strong> .

            </p>
            <div class="imagelevel text-center">
               <img src={{ asset('images/level6.png') }} alt="Level one image" height="750px" width="700px" class="img-responsive center-block">
            </div>
            <h4 class="text-white">Step 9</h4>
            <p class="text-white text-justify">
                <strong>PURCHASE LEVEL 5 (LV5)</strong> from your 5th level upline by sending payment of <strong> ₦160,000</strong>. <strong>LEVEL 5 (LV5)</strong> is considered a <strong>LEADERSHIP LEVEL</strong>. Once this <strong>UPGRADE</strong> is made & <strong>APPROVED</strong>, participants on your 5th line will purchase their <strong>LEVEL 5 (LV5)</strong> upgrade through you. You will receive donations from Twenty (24) Participants on your 5th line. These members will directly send a payment of <strong> ₦160,000</strong> each <strong>X 24</strong> (No. of participants on your 5th line minus eight (8) payments which will go up towards the maintenance & development of the Betaprofitss Community) giving you a total of <strong>₦3,840,000</strong> on <strong>LEVEL 5 (LV5)</strong> .

            </p>
            <div class="imagelevel text-center">
               <img src={{ asset('images/level6.png') }} alt="Level one image" height="750px" width="700px" class="img-responsive center-block">
            </div>

            <h4 class="text-white">Step 10</h4>
            <p class="text-white text-justify">
                To purchase <strong>LEVEL 6 (LV6)</strong>, you will be required to send <strong>₦320,000</strong> to your 6th level upline. <strong>LEVEL 6 (LV6)</strong> is considered a <strong></strong>. Participants on your 6th line will purchase their <strong>LEVEL 6 (LV6)</strong> UPGRADE through you. You will receive donations from Forty-Eight (48) participants on your 6th line. These members will directly send a payment of <strong>₦320,000</strong> each <strong>X 48</strong> (No. of participants on your 6th line minus sixteen (16) payments which will go up towards the maintenance & development of the Betaprofitss Community) giving you a total of ₦15,360,000 on <strong>LEVEL 6 (LV6)</strong>.
            </p>
            <div class="imagelevel text-center">
               <img src={{ asset('images/level7.png') }} alt="Level one image" height="800px" width="700px" class="img-responsive center-block">
            </div>
            <h4 class="text-white">Step 11</h4>
            <p class="text-white text-justify">
                To purchase <strong>LEVEL 7 (LV7)</strong>, you will be required to send <strong>₦640,000</strong> to your 7th upline. LEVEL 7 is considered a <strong>LEADERSHIP LEVEL</strong>. Participants on your 7th line will purchase their level 7 upgrade through you. You will receive donations from ninety-six (96) participants on your 7th line. These members will directly send a payment of <strong>₦640,000</strong> each X 96 (No. of participants on your 7th line minus thirty-two 32) payments which will go up towards the maintenance & development of the Betaprofitss Community giving you a total of ₦61,440,000 on <strong>LEVEL 7 (LV7)</strong>.
            </p>
            <div class="imagelevel text-center">
               <img src={{ asset('images/level8.png') }} alt="Level one image" height="850px" width="750px" class="img-responsive center-block">
            </div>
            <h4 class="text-white">Step 12</h4>
            <p class="text-white text-justify">
                To purchase <strong>LEVEL 8 (LV8)</strong>, you will be required to send ₦1,280,000 to your 8th Level upline to purchase LEVEL 8 UPGRADE. <strong>LEVEL 8</strong> is considered a LEADERSHIP LEVEL. Participants on your 8th line will purchase their <strong>level 8</strong> upgrade through you. You will receive donations from One Hundred & Ninety-Two (192)participants on your 8th line. These members will directly send a payment of <strong>₦1,280,000</strong> each <strong>X 192</strong> (No. of participants on your 8th line minus sixty-four (64) payments which will go up towards the maintenance & development of the Betaprofitss Community) giving you a total earning of <strong>₦245,760,000</strong> on <strong>LEVEL 8 (LV8)</strong>.
            </p>
            <div class="imagelevel text-center">
               <img src={{ asset('images/level9.png') }} alt="Level one image" height="900px" width="800px" class="img-responsive center-block">
            </div>

        </div>
        <p class="heading-text text-white text-justify">
            NOTE: It is possible for members to purchase LEVEL 1- LEVEL 8 ahead before attracting referrals, this strategy gives you greater chances and maximum advantage not to miss out on any payments. It further puts you ahead to earn maximum payouts on all levels. Participants might choose to purchase a minimum of Level 1 to Level 4 or more once onboard as a strategy to give more income opportunity.
        </p>
        <p class="heading-text text-white text-justify">
            If you choose to attract REFERRALS first before upgrading respective Levels, the system will automatically require you to upgrade each level within 24 hours at the moment you have received payments equal to your next level upgrade. It is important that members be <strong>BINARY QUALIFIED</strong> by referring & signing up two (2) active members through their referral link. This helps speed up earnings within the 2x8 FORCE MATRIX. If you choose not to refer anyone, there is no guarantee you will receive payment(s) as spillover will solely depend on the effort of your team members. We Strongly advice to share the opportunity with everyone and have them take a look at BETAPROFITSS & the amazing opportunity within.
        </p>
     </section>
     @include('layouts.footer')
  </div>

@endsection
