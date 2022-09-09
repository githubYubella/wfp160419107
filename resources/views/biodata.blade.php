<html>

<head>
    <style>
        body {
            background-color: #eee;
        }

        .card {
            background-color: #fff;
            width: 280px;
            border-radius: 33px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            padding: 2rem !important;
        }

        .top-container {
            display: flex;
            align-items: center;
        }

        .profile-image {
            border-radius: 10px;
            border: 2px solid #5957f9;
        }

        .name {
            font-size: 15px;
            font-weight: bold;
            color: #272727;
            position: relative;
            top: 8px;
        }

        .mail {
            font-size: 14px;
            color: grey;
            position: relative;
            top: 2px;
        }

        .middle-container {
            background-color: #eee;
            border-radius: 12px;

        }

        .middle-container:hover {
            border: 1px solid #5957f9;
        }

        .dollar-div {
            background-color: #5957f9;
            padding: 12px;
            border-radius: 10px;
        }

        .round-div {
            border-radius: 50%;
            width: 35px;
            height: 35px;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .dollar {
            font-size: 16px !important;
            color: #5957f9 !important;
            font-weight: bold !important;
        }


        .current-balance {
            font-size: 15px;
            color: #272727;
            font-weight: bold;
        }

        .amount {
            color: #5957f9;
            font-size: 16px;
            font-weight: bold;
        }

        .dollar-sign {
            font-size: 16px;
            color: #272727;
            font-weight: bold;
        }

        .recent-border {
            border-left: 2px solid #5957f9;
            display: flex;
            align-items: center;

        }

        .recent-border:hover {
            border-bottom: 1px solid #dee2e6 !important;
        }

        .recent-orders {
            font-size: 16px;
            font-weight: 700;
            color: #5957f9;
            margin-left: 2px;
        }

        .wishlist {
            font-size: 16px;
            font-weight: 700;
            color: #272727;

        }

        .wishlist-border:hover {
            border-bottom: 1px solid #dee2e6 !important;
        }

        .fashion-studio {
            font-size: 16px;
            font-weight: 700;
            color: #272727;
        }

        .fashion-studio-border:hover {
            border-bottom: 1px solid #dee2e6 !important;
        }


        .buttons button:nth-child(2) {
            border: 1px solid #8E24AA !important;
            background-color: #8E24AA;
            color: #fff;
            height: 40px;
        }


        .buttons button:nth-child(1) {
            border: 1px solid #8E24AA !important;
            color: #8E24AA;
            height: 40px;
        }


        body {
            background-color: #f9f9fa
        }

        .padding {
            padding: 20px;
        }

        #page-content {
            margin-top: 50px
        }

        .flex {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto
        }

        .badge {
            display: inline-block;
            padding: .25em .4em;
            font-size: 75%;
            font-weight: 700;
            line-height: 1;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            border-radius: .15rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        table {
            border-collapse: collapse
        }

        .table-theme {
            border-spacing: 0
        }

        .table-theme thead {
            font-size: .7rem
        }

        .table-theme tbody td {
            background-color: #f4c414;
            border-width: 0;
            box-shadow: 0 1px 0 rgba(160, 175, 185, .05), 0 -1px 0 rgba(160, 175, 185, .05)
        }

        .table-theme tbody td:first-child {
            border-radius: .25rem 0 0 .25rem
        }

        .table-theme tbody td:last-child {
            border-radius: 0 .25rem .25rem 0
        }

        .table-row {
            border-collapse: separate !important;
            border-spacing: 0 10px !important
        }

        .table.v-middle td,
        .table.v-middle th {
            vertical-align: middle
        }

        .text-muted {
            color: #838aa0 !important
        }

        .bg-light {
            color: #212529 !important
        }

        .bg-light-lt {
            color: #dadade !important;
            background-color: #8E24AA !important
        }

        .bg-light-lt.active,
        .bg-light-lt:focus,
        .bg-light-lt:hover {
            color: #fff !important;
            background-color: #f5f5f6 !important
        }

        .bg-light--lt {
            color: #5e676f !important;
            background-color: #fdfdfe !important
        }

        .bg-primary-lt {
            color: #116bff !important;
            background-color: #e1ecff !important
        }

        .bg-primary-lt.active,
        .bg-primary-lt:focus,
        .bg-primary-lt:hover {
            color: #fff !important;
            background-color: #448bff !important
        }

        .badge-circle {
            padding: 0 !important;
            width: .625rem;
            height: .625rem;
            border: 2px solid;
            border-radius: 50%
        }

        .badge-circle:empty {
            display: inline-block
        }

        .badge-circle.xs {
            width: 0;
            height: 0;
            border-width: 3px;
            vertical-align: 2px
        }

        .badge-circle.sm {
            width: .5rem;
            height: .5rem;
            vertical-align: 1px
        }

        .badge-circle.md {
            width: 1rem;
            height: 1rem;
            vertical-align: -3px
        }

        .badge-circle.lg {
            width: 1.5rem;
            height: 1.5rem;
            vertical-align: -7px
        }

        .bg-info-lt {
            color: #1094b5 !important;
            background-color: #d9f4fb !important
        }

        .bg-info-lt.active,
        .bg-info-lt:focus,
        .bg-info-lt:hover {
            color: #fff !important;
            background-color: #14bae4 !important
        }

        .bg-success-lt {
            color: #27a05a !important;
            background-color: #def6e8 !important
        }

        .bg-success-lt.active,
        .bg-success-lt:focus,
        .bg-success-lt:hover {
            color: #fff !important;
            background-color: #31c971 !important
        }

        .bg-warning-lt {
            color: #cba20a !important;
            background-color: #fdf6d9 !important
        }

        .bg-warning-lt.active,
        .bg-warning-lt:focus,
        .bg-warning-lt:hover {
            color: #fff !important;
            background-color: #f4c414 !important
        }

        .bg-warning--lt {
            color: #5e676f !important;
            background-color: #fdf6d9 !important
        }

        .bg-danger-lt {
            color: #f21378 !important;
            background-color: #fde1ee !important
        }

        .bg-danger-lt.active,
        .bg-danger-lt:focus,
        .bg-danger-lt:hover {
            color: #fff !important;
            background-color: #f54394 !important
        }

        .bg-secondary-lt {
            color: #3e455a !important;
            background-color: #e3e5e9 !important
        }

        .bg-secondary-lt.active,
        .bg-secondary-lt:focus,
        .bg-secondary-lt:hover {
            color: #fff !important;
            background-color: #535c78 !important
        }

        .bg-dark-lt {
            color: #090c16 !important;
            background-color: #dadbdf !important
        }

        .bg-dark-lt.active,
        .bg-dark-lt:focus,
        .bg-dark-lt:hover {
            color: #fff !important;
            background-color: #192039 !important
        }

        @media (min-width: 992px) {
            .page-container {
                max-width: 1140px;
                margin: 0 auto
            }
        }
    </style>
</head>


<body>
    @if(isset($nrp))
    @if ($nrp =='160419083')
    <div class="card">
        <div class="top-container">
            <img src="https://my.ubaya.ac.id/img/mhs/160419083_l.jpg" class="img-fluid profile-image" width="70">
        </div>
        <div class="recent-border mt-4">
            <span class="recent-orders">Devina Aprillia A.</span>
        </div>
        <div class="wishlist-border pt-2">
            <span class="wishlist">NRP: {{$nrp}}</span>
        </div>
        <div class="fashion-studio-border pt-2">
            <span class="fashion-studio">Asal Kelahiran : Kalimantan Barat</span>
        </div>
        <div class="fashion-studio-border pt-2">
            <span class="fashion-studio">Hobby : Berkelana</span>
        </div>
        <div class="buttons">
            <button class="btn btn-outline-primary px-4">Message</button>
            <button class="btn btn-primary px-4 ms-3">Contact</button>
        </div>

    </div>
    @elseif ($nrp =='160419157')
    <div class="card">
        <div class="top-container">

            <img src="https://my.ubaya.ac.id/img/mhs/160419157_l.jpg" class="img-fluid profile-image" width="70">
        </div>



        <div class="recent-border mt-4">
            <span class="recent-orders">Elsafira Sagita Aslolole</span>
        </div>
        <div class="wishlist-border pt-2">
            <span class="wishlist">NRP: {{$nrp}}</span>
        </div>
        <div class="fashion-studio-border pt-2">
            <span class="fashion-studio">Asal Kelahiran : Banyuwangi</span>
        </div>
        <div class="fashion-studio-border pt-2">
            <span class="fashion-studio">Hobby : Mukbang</span>
        </div>

        <div class="buttons">

            <button class="btn btn-outline-primary px-4">Message</button>
            <button class="btn btn-primary px-4 ms-3">Contact</button>
        </div>

    </div>
    @else
    <div class="card">
        <div class="top-container">
            <img src="https://scontent.fsub9-1.fna.fbcdn.net/v/t39.30808-6/275209069_1623707618027728_8846593930486315848_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeFVaR3xMVJHZwCXuvBlhfdxYbWVKU1g-1RhtZUpTWD7VIZOEQjJIh3Ntqse474S_T-Pqc4wxhTN6YfOmGf1MLD3&_nc_ohc=VIUoH_afDw8AX-POzZP&_nc_ht=scontent.fsub9-1.fna&oh=00_AT8up3sm3RAmrAeUsvkN33C3gRJIQ39PW-mSRGfcQ7yf4Q&oe=631C8227" class="img-fluid profile-image" width="70">
        </div>
        <div class="recent-border mt-4">
            <span class="recent-orders">{{$nama}}</span>
        </div>
        <div class="wishlist-border pt-2">
            <span class="wishlist">NRP: {{$nrp}}</span>
        </div>
        <div class="fashion-studio-border pt-2">
            <span class="fashion-studio">Asal Kelahiran : {{$asal}}</span>
        </div>
        <div class="fashion-studio-border pt-2">
            <span class="fashion-studio">Hobby : {{$hobby}}</span>
        </div>

        <div class="buttons">

            <button class="btn btn-outline-primary px-4">Message</button>
            <button class="btn btn-primary px-4 ms-3">Contact</button>
        </div>

    </div>

    @endif
    @else
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="table-responsive">
                <table class="table table-theme table-row v-middle">
                    <thead>
                        <tr>
                            <th class="text-muted" style="width:60px">Name</th>
                            <th class="text-muted"></th>
                            <td></td>
                            <th class="text-muted" style="width:50px">NRP</th>
                           
                        </tr>
                    </thead>
                    <tbody>

                        <tr class="v-middle">
                            <td><a href="#" data-abc="true">
                                    <span class="badge badge-danger text-uppercase">
                                        Elsafira
                                    </span></a></td>
                            <td class="flex">
                                <div class="bg-light r r-3 py-1 my-1"></div>
                                <div class="bg-light r r-3 py-1 my-1 col-6"></div>
                            </td>
                            <td></td>
                            <td><span class="badge bg-danger-lt">160419157</span></td>
                            <td><form action="../myfriend/160419157">
                                <button>Button</button>
                            </form></td>
                        </small></td>

                        </tr>
                        <tr class="v-middle">
                            <td><a href="#" data-abc="true"><span class="badge badge-danger text-uppercase">Devina Aprilia A.</span></a></td>
                            <td class="flex">
                                <div class="bg-light r r-3 py-1 my-1"></div>
                                <div class="bg-light r r-3 py-1 my-1 col-6"></div>
                            </td>
                            <td></td>
                            <td><span class="badge bg-warning-lt">160419083</span></td>
                            <!-- <td><form action="/myfriend/160419083">
                                <button>Button</button>
                            </form></td> -->
                            <td><a href="/myfriend/160419083">View</a></td>
                        </small></td>


                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


    @endif

</body>

</html>