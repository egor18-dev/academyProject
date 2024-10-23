@extends('page')
@section('page')
            <section class="container-fluid pt-3">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card nft-banner-card overflow-hidden">
                                    <div class="card-body p-5">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <h3 class="fw-semibold text-fixed-white">
                                                    Discover, Collect, Create: Your NFT Universe Awaits!
                                                </h3>
                                                <p class="text-fixed-white fs-15 op-8 mb-4">Explore unique digital assets, connect with creators, and unlock endless possibilities in the world of nft's.</p>
                                                <button class="btn btn-primary btn-wave">Discover Now<i class="ti ti-arrow-narrow-right mx-2 align-middle"></i></button>
                                            </div>
                                            <div class="col-lg-5">
                                                <img src="../assets/images/nft-images/1.png" class="img-fluid nft-main-banner-image d-lg-block d-none" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start gap-3 flex-wrap">
                                            <div>
                                                <span class="avatar avatar-md bg-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><polygon points="152 224 104 152 76.36 193.46 60 168 24 224 152 224" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="152 32 152 88 208 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M192,224h8a8,8,0,0,0,8-8V88L152,32H56a8,8,0,0,0-8,8v88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="d-block mb-2">Total Assets</span>
                                                <h3 class="fw-semibold mb-2 lh-1">12,432 </h3>
                                                <div class="text-muted"><span class="text-success me-1 d-inline-flex align-items-center"><i class="ti ti-arrow-narrow-up"></i>2.5%</span>Increased</div>
                                            </div>
                                            <div class="dropdown"> 
                                                <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown"> 
                                                    <i class="ri-more-2-fill fs-18 text-muted"></i>
                                                </a> 
                                                <ul class="dropdown-menu" role="menu"> 
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li> 
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li> 
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li> 
                                                </ul> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start gap-3 flex-wrap">
                                            <div>
                                                <span class="avatar avatar-md bg-secondary svg-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><line x1="128" y1="24" x2="128" y2="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="128" y1="208" x2="128" y2="232" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M184,88a40,40,0,0,0-40-40H112a40,40,0,0,0,0,80h40a40,40,0,0,1,0,80H104a40,40,0,0,1-40-40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="d-block mb-2">Total Value</span>
                                                <h3 class="fw-semibold mb-2 lh-1">$9,432</h3>
                                                <div class="text-muted"><span class="text-danger me-1 d-inline-flex align-items-center"><i class="ti ti-arrow-narrow-up"></i>2.5%</span>Decreased</div>
                                            </div>
                                            <div class="dropdown"> 
                                                <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown"> 
                                                    <i class="ri-more-2-fill fs-18 text-muted"></i>
                                                </a> 
                                                <ul class="dropdown-menu" role="menu"> 
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li> 
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li> 
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li> 
                                                </ul> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start gap-3 flex-wrap">
                                            <div>
                                                <span class="avatar avatar-md bg-success svg-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M54.46,201.54c-9.2-9.2-3.1-28.53-7.78-39.85C41.82,150,24,140.5,24,128s17.82-22,22.68-33.69C51.36,83,45.26,63.66,54.46,54.46S83,51.36,94.31,46.68C106.05,41.82,115.5,24,128,24S150,41.82,161.69,46.68c11.32,4.68,30.65-1.42,39.85,7.78s3.1,28.53,7.78,39.85C214.18,106.05,232,115.5,232,128S214.18,150,209.32,161.69c-4.68,11.32,1.42,30.65-7.78,39.85s-28.53,3.1-39.85,7.78C150,214.18,140.5,232,128,232s-22-17.82-33.69-22.68C83,204.64,63.66,210.74,54.46,201.54Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="96" cy="96" r="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="160" cy="160" r="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="88" y1="168" x2="168" y2="88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="d-block mb-2">Total Sales</span>
                                                <h3 class="fw-semibold mb-2 lh-1">3,132</h3>
                                                <div class="text-muted"><span class="text-success me-1 d-inline-flex align-items-center"><i class="ti ti-arrow-narrow-up"></i>2.5%</span>Increased</div>
                                            </div>
                                            <div class="dropdown"> 
                                                <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown"> 
                                                    <i class="ri-more-2-fill fs-18 text-muted"></i>
                                                </a> 
                                                <ul class="dropdown-menu" role="menu"> 
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li> 
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li> 
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li> 
                                                </ul> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-start gap-3 flex-wrap">
                                            <div>
                                                <span class="avatar avatar-md bg-info svg-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M40,56V184a16,16,0,0,0,16,16H216a8,8,0,0,0,8-8V80a8,8,0,0,0-8-8H56A16,16,0,0,1,40,56h0A16,16,0,0,1,56,40H192" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="180" cy="132" r="12"/></svg>
                                                </span>
                                            </div>
                                            <div class="flex-fill">
                                                <span class="d-block mb-2">Total Revenue</span>
                                                <h3 class="fw-semibold mb-2 lh-1">$2,561.09</h3>
                                                <div class="text-muted"><span class="text-success me-1 d-inline-flex align-items-center"><i class="ti ti-arrow-narrow-up"></i>2.5%</span>Increased</div>
                                            </div>
                                            <div class="dropdown"> 
                                                <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown"> 
                                                    <i class="ri-more-2-fill fs-18 text-muted"></i>
                                                </a> 
                                                <ul class="dropdown-menu" role="menu"> 
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li> 
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li> 
                                                    <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li> 
                                                </ul> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-xxl-9">
                        <div class="row">
                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="position-relative mb-3 overflow-hidden rounded">
                                            <img src="../assets/images/nft-images/3.jpg" class="card-img rounded" alt="...">
                                            <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                            <div class="nft-content">
                                                <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">CryptoCanvas</a>
                                                <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                                    <div> 
                                                        <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                                        <span class="fw-medium text-fixed-white d-block lh-1">PixelCraftPro</span>
                                                    </div>
                                                    <div class="text-end">
                                                        <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs">
                                                                <img src="../assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                            </span>
                                                            <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">2.78</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-grid">
                                            <button class="btn btn-primary btn-wave">
                                                Place BId
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="position-relative mb-3 overflow-hidden rounded">
                                            <img src="../assets/images/nft-images/4.jpg" class="card-img rounded" alt="...">
                                            <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                            <div class="nft-content">
                                                <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">Ethereal Echoes</a>
                                                <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                                    <div> 
                                                        <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                                        <span class="fw-medium text-fixed-white d-block lh-1">PixelPioner</span>
                                                    </div>
                                                    <div class="text-end">
                                                        <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs">
                                                                <img src="../assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                            </span>
                                                            <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">1.24</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-grid">
                                            <button class="btn btn-primary btn-wave">
                                                Place BId
                                            </button>
                                        </div>   
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="position-relative mb-3 overflow-hidden rounded">
                                            <img src="../assets/images/nft-images/5.jpg" class="card-img rounded" alt="...">
                                            <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                            <div class="nft-content">
                                                <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">Rhythm Realms</a>
                                                <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                                    <div> 
                                                        <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                                        <span class="fw-medium text-fixed-white d-block lh-1">CraftedPixel</span>
                                                    </div>
                                                    <div class="text-end">
                                                        <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs">
                                                                <img src="../assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                            </span>
                                                            <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">3.56</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-grid">
                                            <button class="btn btn-primary btn-wave">
                                                Place BId
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="card custom-card">
                                    <div class="card-body">
                                        <div class="position-relative mb-3 overflow-hidden rounded">
                                            <img src="../assets/images/nft-images/2.jpg" class="card-img rounded" alt="...">
                                            <p class="mb-0 bg-secondary text-fixed-white nft-auction-time"> 04hrs : 24m : 38s </p>
                                            <div class="nft-content">
                                                <a href="javascript:void(0);" class="fs-14 fw-bold text-fixed-white">Melodic Muses</a>
                                                <div class="d-flex mb-0 align-items-center flex-wrap gap-2 justify-content-between">
                                                    <div> 
                                                        <span class="fs-12 text-fixed-white d-block mb-1 op-8">Created By</span>
                                                        <span class="fw-medium text-fixed-white d-block lh-1">CraftPixel</span>
                                                    </div>
                                                    <div class="text-end">
                                                        <span class="fs-12 text-fixed-white d-block mb-1">Top Bid</span>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs">
                                                                <img src="../assets/images/crypto-currencies/square-color/Ethereum.svg" alt="">
                                                            </span>
                                                            <span class="ms-1 h6 mb-0 fw-semibold text-fixed-white">1.6</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-grid">
                                            <button class="btn btn-primary btn-wave">
                                                Place BId
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
            </div>
        </section>
@endsection

