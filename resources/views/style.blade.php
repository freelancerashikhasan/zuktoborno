<style>
    body{
        font-family: "Lexend", sans-serif !important;
        width: 100%;
        height: auto !important;
        max-width: 3600px !important;
        margin: 0 auto !important;
        padding: 0;
        background: linear-gradient(180deg, #243B55 0%, #162134 100%);
    }
    .navbar{
        font-family: "Lexend", sans-serif !important;
        background: rgba(221, 221, 221, 0.02) !important;
        backdrop-filter: blur(40.150001525878906px) !important;
        padding: 1% 5% !important;
    }
    .logo{
        width: 166px;
        height: 56px;
    }
    .contact-btn{
        font-family: "Lexend", sans-serif !important;
        display: flex;
        width: 150px;
        height: 46px;
        justify-content: center;
        align-items: center;
        gap: 14px;
        border-radius: 6px;
        border: 2px solid var(--Blue-1, #328AF1);
        background: transparent !important;
        color: var(--Gray, #97A8BF);
        text-align: center;
        font-family: Monda;
        font-size: 14px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }
    .login-btn{
        font-family: "Lexend", sans-serif !important;
        display: flex;
        width: 150px;
        height: 46px;
        justify-content: center;
        align-items: center;
        gap: 14px;
        border-radius: 6px;
        border: 2px solid var(--Blue-1, #328AF1);
        border-radius: 4px;
        background: var(--Blue-2, #3892EF);
        color: #EAECEE;
        text-align: center;
        font-family: Monda;
        font-size: 14px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }
    .contact-icon{
        width: 17px;
        height: 22px;
        flex-shrink: 0;
        fill: var(--Gray, #97A8BF);
    }
    .login-icon{
        fill: var(--White, #EAECEE);
        width: 14px;
        height: 13px;
        flex-shrink: 0;
    }
    .nav-link{
        color: #EAECEE !important;
    }
    .main-sec{
        background: linear-gradient(180deg, #243B55 0%, #162134 100%) !important;
        padding: 1% 5% !important;
    }
    .introduce-sec{
        background: url('{{ asset("font-page/Group 4.png") }}');
        background-size: cover; /* or contain, depending on your preference */
        background-repeat: no-repeat;
        opacity: 70% !important;
    }
    .robot{
        width: 90% !important;
    }
    .intro-btn{
        border-radius: 6px;
        background: var(--Light-Blue, #243B55);
        box-shadow: 0px 0px 12px 0px rgba(255, 255, 255, 0.15);
        color: var(--Gray, #97A8BF);
        text-align: center;
        font-family: Monda;
        font-size: 14px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        display: flex;
        width: 151px;
        height: 36px;
        padding: 10px;
        justify-content: center;
        align-items: center;
        gap: 16px;
    }
    .intro-icon{
        width: 16px;
        height: 16px;
        flex-shrink: 0;
        fill: var(--Gray, #97A8BF);
        opacity: 0.7;
    }
    .intro-line1{
        color: var(--Gray, #97A8BF);
        font-family: Monda;
        font-size: 32px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }
    .intro-line2{
        color: #FFF;
        font-family: Monda;
        font-size: 36px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }
    .intro-line3{
        color: var(--Gray, #97A8BF);
        font-family: Monda;
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }
    .about-line1{
        color: var(--Gray, #97A8BF);
        font-family: Monda;
        font-size: 32px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }
    .about-line2{
        color: #FFF;
        font-family: Monda;
        font-size: 36px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }
    .about-line3{
        color: var(--Gray, #97A8BF);
        font-family: Monda;
        font-size: 16px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }
    .about-sec{
        width: 100%;
        padding: 1% 5%;
    }
    .about-img{
        display: flex;
        width: 80% !important;
        height: auto !important;
        justify-content: center;
        align-items: center;
        flex-shrink: 0;
    }
    .right-align{
        text-align: right !important;
    }
    .product-card{
        display: flex;
        padding: 10px;
        flex-direction: column;
        align-items: flex-start;
        gap: 12px;
        border-radius: 6px;
        background: var(--BOX-BG, #16273F);
        box-shadow: 0px 0px 16px 0px rgba(255, 255, 255, 0.15);
        width: 80% !important;
    }
    .pro-img{
        width: 100%;
        text-align: center;
        margin: 0 auto;
    }
    .pro-p{
        color: var(--White, #EAECEE);
        font-family: Monda;
        font-size: 18px;
        font-style: normal;
        font-weight: 700;
        line-height: 22px; /* 146.667% */
    }
    .download span{
        color: var(--Gray, #97A8BF);
        text-align: right;
        font-family: Monda;
        font-size: 18px;
        font-style: normal;
        font-weight: 700;
        line-height: 22px; /* 146.667% */
    }
    .cart-btn{
        border-radius: 6px;
        border: 1px solid var(--Blue-2, #3892EF);
        display: flex;
        width: 44px;
        height: 32px;
        padding: 10px;
        justify-content: center;
        align-items: center;
        gap: 10px;
    }
    .demo-btn{
        display: flex;
        height: 32px;
        padding: 10px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 6px;
        border: 1px solid var(--Blue-1, #328AF1);
    }
    .ser-img{
        width: 58px;
        height: 55px;
        flex-shrink: 0;
    }
    .service-sec{
        display: flex;
        padding: 10px 0px 10px 20px;
        align-items: center;
        gap: 44px;
        background: var(--BOX-BG, #16273F);
        box-shadow: 0px 0px 18px 0px rgba(255, 255, 255, 0.15);
    }
    .footer{
        background: var(--BOX-BG, #16273F) !important;
        padding: 64px 80px;
    }
    .f-sec-01-text{
        color: #FFF;
        font-family: Poppins;
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        letter-spacing: 6px;
    }
    .f-sec-01-inp{
        display: flex;
        width: 360px;
        padding: 14px 24px;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 100px;
        border: 1px solid rgba(255, 255, 255, 0.24);
    }
    .f-sec01-input{
        background: transparent !important;
        border: none !important;
        color: #FFF !important;
    }
    .f-sec01-suscribe{
        display: flex;
        padding: 14px 28px;
        align-items: flex-start;
        gap: 10px;
        border-radius: 100px;
        background: var(--Blue-1, #328AF1);
    }
    .footer-logo{
        display: flex;
        width: 363px;
        flex-direction: column;
        align-items: flex-start;
        gap: 16px;
        flex-shrink: 0;
    }
    .f-links-p{
        color: rgba(255, 255, 255, 0.80);
        font-family: Poppins;
        font-size: 16px;
        font-style: normal;
        font-weight: 500;
        line-height: normal;
    }
    .copyright{
        color: rgba(255, 255, 255, 0.80);
        font-family: Poppins;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }
    @media(max-width:768px){
        .footer-logo{
            display: flex;
            width: 200px;
            flex-direction: column;
            align-items: flex-start;
            gap: 16px;
            flex-shrink: 0;
            margin: 20px;
        }
        .sus-sec{
            display: block !important;
        }
        .f-sec-01-inp{
            width: 100% !important;
            margin: 10px !important;
        }
        .f-sec01-suscribe{
            margin: 0 auto !important;
        }
    }
</style>
