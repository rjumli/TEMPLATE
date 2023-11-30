<template>
    <div>
        <div class="app-menu navbar-menu">
            <div class="navbar-brand-box">
                <Link href="/" class="logo logo-dark">
                    <span class="logo-sm"><img src="/imagess/logo-sm.png" alt="" height="30" /></span>
                    <span class="logo-lg"><img src="/imagess/logo-dark.png" alt="" height="30" /></span>
                </Link>
                <Link href="/" class="logo logo-light">
                    <span class="logo-sm"> <img src="/imagess/logo-sm.png" alt="" height="30" /> </span>
                    <span class="logo-lg"><img src="/imagess/logo-light.png" alt="" height="30" /> </span>
                </Link>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover" @click="initActiveMenu">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <!-- <simplebar id="scrollbar" class="h-100" ref="scrollbar"> -->
            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-item">
                    <Link class="nav-link menu-link" :class="{'active': $page.component.startsWith('Modules/Home') }" href="/home">
                        <i class='ri ri-apps-line '></i>
                        <span data-key="t-dashboards">Home</span>
                    </Link>
                </li>
                <li class="nav-item">
                    <Link class="nav-link menu-link" :class="{'active': $page.component.startsWith('Modules/Monitoring') }" href="/monitoring">
                        <i class='bx bxs-webcam'></i>
                        <span data-key="t-students">Monitoring</span>
                    </Link>
                </li>  
                <!-- <li class="nav-item">
                    <Link class="nav-link menu-link" :class="{'active': $page.component.startsWith('Modules/Monitoring2') }" href="/monitoring2">
                        <i class='bx bxs-webcam'></i>
                        <span data-key="t-students">Monitoring2</span>
                    </Link>
                </li>  -->
                <li class="nav-item">
                    <Link class="nav-link menu-link" :class="{'active': $page.component.startsWith('Modules/Schools') }" href="/schools">
                        <i class='bx bxs-school'></i>
                        <span data-key="t-students">Schools</span>
                    </Link>
                </li>   
                <li class="nav-item">
                    <Link class="nav-link menu-link" :class="{'active': $page.component.startsWith('Modules/Qualifiers') }" href="/qualifiers">
                        <i class='ri-user-add-fill'></i>
                        <span data-key="t-students">Qualifiers</span>
                    </Link>
                </li>    
                <li class="nav-item">
                    <Link class="nav-link menu-link" :class="{'active': $page.component.startsWith('Modules/Scholars') }" href="/scholars">
                        <i class='ri-team-fill'></i>
                        <span data-key="t-students">Scholars</span>
                    </Link>
                </li>       
                <li class="nav-item">
                    <Link class="nav-link menu-link" :class="{'active': $page.component.startsWith('Modules/Enrollments') }" href="/enrollments">
                        <i class='ri-pages-line' ></i>
                        <span data-key="t-students">Enrollments</span>
                    </Link>
                </li>    
                <li class="nav-item">
                    <Link class="nav-link menu-link" :class="{'active': $page.component.startsWith('Modules/FinancialBenefits') }" href="/financial-benefits">
                        <i class='ri-wallet-3-fill ' ></i>
                        <span data-key="t-students">Financial Benefits</span>
                    </Link>
                </li>   
                <li class="nav-item">
                    <Link class="nav-link menu-link" :class="{'active': $page.component.startsWith('Modules/Accounting') }" href="/accounting">
                        <i class='ri-hand-coin-fill' ></i>
                        <span data-key="t-students">Accounting</span>
                    </Link>
                </li>
                <li class="nav-item">
                    <Link class="nav-link menu-link" :class="{'active': $page.component.startsWith('Modules/Insights') }" href="/insights">
                        <i class='ri-line-chart-fill' ></i>
                        <span data-key="t-students">Insights</span>
                    </Link>
                </li>
                <li class="nav-item">
                    <Link class="nav-link menu-link" :class="{'active': $page.component.startsWith('Modules/Staffs') }" href="/staffs">
                        <i class='bx bx-user-circle' ></i>
                        <span data-key="t-students">Staffs</span>
                    </Link>
                </li>  
                <li class="nav-item">
                    <Link class="nav-link menu-link" :class="{'active': $page.component.startsWith('Modules/Settings') }" href="/settings">
                        <i class='ri-settings-5-fill' ></i>
                        <span data-key="t-students">Settings</span>
                    </Link>
                </li>
            </ul>
            <!-- </simplebar> -->
            <div class="sidebar-background"></div>
        </div>
    </div>
    <div class="vertical-overlay" id="overlay"></div>
</template>
<script>
export default {
    mounted() {
        window.addEventListener('keydown', this.handleKeyPress);
    },
    destroyed() {
        window.removeEventListener('keydown', this.handleKeyPress);
    },
    methods: {
        handleKeyPress(event) {
            if (event.altKey) {
                switch (event.key) {
                    case '1':
                    this.$inertia.visit('/home');
                    break;
                    case '2':
                    this.$inertia.visit('/monitoring');
                    break;
                    case '3':
                    this.$inertia.visit('/schools');
                    break;
                    case '4':
                    this.$inertia.visit('/qualifiers');
                    break;
                    case '5':
                    this.$inertia.visit('/scholars');
                    break;
                    case '6':
                    this.$inertia.visit('/enrollments');
                    break;
                    case '7':
                    this.$inertia.visit('/financial-benefits');
                    break;
                    case '8':
                    this.$inertia.visit('/accounting');
                    break;
                    case '9':
                    this.$inertia.visit('/insights');
                    break;
                    case '10':
                    this.$inertia.visit('/staffs');
                    break;
                    case '11':
                    this.$inertia.visit('/setting');
                    break;
                }
            }
        },
    },
}
</script>