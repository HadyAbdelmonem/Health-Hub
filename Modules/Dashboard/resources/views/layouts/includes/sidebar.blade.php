
          <!-- ========== App Menu Start ========== -->
          <div class="main-nav">
            <!-- Sidebar Logo -->
            <div class="logo-box">
                 <a href="index.html" class="logo-dark">
                      <img src="{{asset('dashboard/assets/images/logo-sm.png')}}" class="logo-sm" alt="logo sm">
                      <img src="{{asset('dashboard/assets/images/logo-dark.png')}}" class="logo-lg" alt="logo dark">
                 </a>

                 <a href="index.html" class="logo-light">
                      <img src="{{asset('dashboard/assets/images/logo-sm.png')}}" class="logo-sm" alt="logo sm">
                      <img src="{{asset('dashboard/assets/images/logo-light.png')}}" class="logo-lg" alt="logo light">
                 </a>
            </div>

            <!-- Menu Toggle Button (sm-hover) -->
            <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
                 <iconify-icon icon="solar:double-alt-arrow-right-bold-duotone" class="button-sm-hover-icon"></iconify-icon>
            </button>

            <div class="scrollbar" data-simplebar>
                 <ul class="navbar-nav" id="navbar-nav">

                      <li class="menu-title">General</li>

                      <li class="nav-item">
                           <a class="nav-link" href="{{ route('admin.dashboard') }}">
                                <span class="nav-icon">
                                     <iconify-icon icon="solar:widget-5-bold-duotone"></iconify-icon>
                                </span>
                                <span class="nav-text"> Dashboard </span>
                           </a>
                      </li>
                      {{-- products --}}
                      <li class="nav-item">
                           <a class="nav-link menu-arrow" href="#sidebarProducts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProducts">
                                <span class="nav-icon">
                                     <iconify-icon icon="solar:t-shirt-bold-duotone"></iconify-icon>
                                </span>
                                <span class="nav-text"> Products </span>
                           </a>
                           <div class="collapse" id="sidebarProducts">
                                <ul class="nav sub-navbar-nav">
                                    @if(auth()->guard('admin')->user()->hasPermission('read-products'))

                                    <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="{{ route('admin.products.index') }}">List</a>
                                     </li>
                                    @endif

                                    @if(auth()->guard('admin')->user()->hasPermission('create-products'))
                                     <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="{{ route('admin.products.create') }}">Create</a>
                                     </li>
                                        @endif
                                </ul>
                           </div>
                      </li>
                      {{-- category --}}
                     @if(auth()->guard('admin')->user()->hasPermission('read-categories'))
                      <li class="nav-item">
                           <a class="nav-link menu-arrow" href="#sidebarCategory" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCategory">
                                <span class="nav-icon">
                                     <iconify-icon icon="solar:clipboard-list-bold-duotone"></iconify-icon>
                                </span>
                                <span class="nav-text"> Category </span>
                           </a>
                          <div class="collapse" id="sidebarCategory">
                                <ul class="nav sub-navbar-nav">
                                     <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="{{ route('admin.category.index') }}">List</a>
                                     </li>
                                    @if(auth()->guard('admin')->user()->hasPermission('create-categories'))
                                     <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="{{ route('admin.category.create') }}">Create</a>
                                     </li>
                                    @endif
                                </ul>
                           </div>
                          @endif
                      </li>

{{--                      <li class="nav-item">--}}
{{--                           <a class="nav-link menu-arrow" href="#sidebarInventory" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInventory">--}}
{{--                                <span class="nav-icon">--}}
{{--                                     <iconify-icon icon="solar:box-bold-duotone"></iconify-icon>--}}
{{--                                </span>--}}
{{--                                <span class="nav-text"> Inventory </span>--}}
{{--                           </a>--}}
{{--                           <div class="collapse" id="sidebarInventory">--}}
{{--                                <ul class="nav sub-navbar-nav">--}}

{{--                                     <li class="sub-nav-item">--}}
{{--                                          <a class="sub-nav-link" href="inventory-warehouse.html">Warehouse</a>--}}
{{--                                     </li>--}}
{{--                                     <li class="sub-nav-item">--}}
{{--                                          <a class="sub-nav-link" href="inventory-received-orders.html">Received Orders</a>--}}
{{--                                     </li>--}}
{{--                                </ul>--}}
{{--                           </div>--}}
{{--                      </li>--}}

{{--                      <li class="nav-item">--}}
{{--                           <a class="nav-link menu-arrow" href="#sidebarOrders" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarOrders">--}}
{{--                                <span class="nav-icon">--}}
{{--                                     <iconify-icon icon="solar:bag-smile-bold-duotone"></iconify-icon>--}}
{{--                                </span>--}}
{{--                                <span class="nav-text"> Orders </span>--}}
{{--                           </a>--}}
{{--                           <div class="collapse" id="sidebarOrders">--}}
{{--                                <ul class="nav sub-navbar-nav">--}}

{{--                                     <li class="sub-nav-item">--}}
{{--                                          <a class="sub-nav-link" href="orders-list.html">List</a>--}}
{{--                                     </li>--}}
{{--                                     <li class="sub-nav-item">--}}
{{--                                          <a class="sub-nav-link" href="order-detail.html">Details</a>--}}
{{--                                     </li>--}}
{{--                                     <li class="sub-nav-item">--}}
{{--                                          <a class="sub-nav-link" href="order-cart.html">Cart</a>--}}
{{--                                     </li>--}}
{{--                                     <li class="sub-nav-item">--}}
{{--                                          <a class="sub-nav-link" href="order-checkout.html">Check Out</a>--}}
{{--                                     </li>--}}
{{--                                </ul>--}}
{{--                           </div>--}}
{{--                      </li>--}}

{{--                      <li class="nav-item">--}}
{{--                           <a class="nav-link menu-arrow" href="#sidebarPurchases" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPurchases">--}}
{{--                                <span class="nav-icon">--}}
{{--                                     <iconify-icon icon="solar:card-send-bold-duotone"></iconify-icon>--}}
{{--                                </span>--}}
{{--                                <span class="nav-text"> Purchases </span>--}}
{{--                           </a>--}}
{{--                           <div class="collapse" id="sidebarPurchases">--}}
{{--                                <ul class="nav sub-navbar-nav">--}}
{{--                                     <li class="sub-nav-item">--}}
{{--                                          <a class="sub-nav-link" href="purchase-list.html">List</a>--}}
{{--                                     </li>--}}
{{--                                     <li class="sub-nav-item">--}}
{{--                                          <a class="sub-nav-link" href="purchase-order.html">Order</a>--}}
{{--                                     </li>--}}
{{--                                     <li class="sub-nav-item">--}}
{{--                                          <a class="sub-nav-link" href="purchase-returns.html">Return</a>--}}
{{--                                     </li>--}}
{{--                                </ul>--}}
{{--                           </div>--}}
{{--                      </li>--}}

{{--                      <li class="nav-item">--}}
{{--                           <a class="nav-link menu-arrow" href="#sidebarAttributes" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAttributes">--}}
{{--                                <span class="nav-icon">--}}
{{--                                     <iconify-icon icon="solar:confetti-minimalistic-bold-duotone"></iconify-icon>--}}
{{--                                </span>--}}
{{--                                <span class="nav-text"> Attributes </span>--}}
{{--                           </a>--}}
{{--                           <div class="collapse" id="sidebarAttributes">--}}
{{--                                <ul class="nav sub-navbar-nav">--}}
{{--                                     <li class="sub-nav-item">--}}
{{--                                          <a class="sub-nav-link" href="attributes-list.html">List</a>--}}
{{--                                     </li>--}}
{{--                                     <li class="sub-nav-item">--}}
{{--                                          <a class="sub-nav-link" href="attributes-edit.html">Edit</a>--}}
{{--                                     </li>--}}
{{--                                     <li class="sub-nav-item">--}}
{{--                                          <a class="sub-nav-link" href="attributes-add.html">Create</a>--}}
{{--                                     </li>--}}
{{--                                </ul>--}}
{{--                           </div>--}}
{{--                      </li>--}}

{{--                      <li class="nav-item">--}}
{{--                           <a class="nav-link menu-arrow" href="#sidebarInvoice" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInvoice">--}}
{{--                                <span class="nav-icon">--}}
{{--                                     <iconify-icon icon="solar:bill-list-bold-duotone"></iconify-icon>--}}
{{--                                </span>--}}
{{--                                <span class="nav-text"> Invoices </span>--}}
{{--                           </a>--}}
{{--                           <div class="collapse" id="sidebarInvoice">--}}
{{--                                <ul class="nav sub-navbar-nav">--}}
{{--                                     <li class="sub-nav-item">--}}
{{--                                          <a class="sub-nav-link" href="invoice-list.html">List</a>--}}
{{--                                     </li>--}}
{{--                                     <li class="sub-nav-item">--}}
{{--                                          <a class="sub-nav-link" href="invoice-details.html">Details</a>--}}
{{--                                     </li>--}}
{{--                                     <li class="sub-nav-item">--}}
{{--                                          <a class="sub-nav-link" href="invoice-add.html">Create</a>--}}
{{--                                     </li>--}}
{{--                                </ul>--}}
{{--                           </div>--}}
{{--                      </li>--}}
                    @if(auth()->guard('admin')->user()->hasPermission('read-settings'))
                      <li class="nav-item">
                           <a class="nav-link" href="settings.html">
                                <span class="nav-icon">
                                     <iconify-icon icon="solar:settings-bold-duotone"></iconify-icon>
                                </span>
                                <span class="nav-text"> Settings </span>
                           </a>
                      </li>
                         @endif

                      <li class="menu-title mt-2">Users</li>

                      <li class="nav-item">
                           <a class="nav-link" href="{{route('admin.profile.edit')}}">
                                <span class="nav-icon">
                                     <iconify-icon icon="solar:chat-square-like-bold-duotone"></iconify-icon>
                                </span>
                                <span class="nav-text"> Profile </span>
                           </a>
                      </li>
                         @if(auth()->guard('admin')->user()->hasPermission('read-roles'))

                      <li class="nav-item">
                           <a class="nav-link menu-arrow" href="#sidebarRoles" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarRoles">
                                <span class="nav-icon">
                                     <iconify-icon icon="solar:user-speak-rounded-bold-duotone"></iconify-icon>
                                </span>
                                <span class="nav-text"> Roles </span>
                           </a>
                           <div class="collapse" id="sidebarRoles">
                                <ul class="nav sub-navbar-nav">
                                     <ul class="nav sub-navbar-nav">
                                         @if(auth()->guard('admin')->user()->hasPermission('read-roles'))
                                          <li class="sub-nav-item">
                                               <a class="sub-nav-link" href="{{ route('admin.roles.index') }}">List</a>
                                          </li>
                                         @endif
                                             @if(auth()->guard('admin')->user()->hasPermission('create-roles'))
                                          <li class="sub-nav-item">
                                               <a class="sub-nav-link" href="{{ route('admin.roles.create') }}">Create</a>
                                          </li>
                                         @endif
                                     </ul>
                                </ul>
                           </div>
                      </li>
                         @endif
                     @if(auth()->guard('admin')->user()->hasPermission('read-roles'))
                      <li class="nav-item">
                           <a class="nav-link" href="{{ route('admin.permissions.index') }}">
                                <span class="nav-icon">
                                     <iconify-icon icon="solar:checklist-minimalistic-bold-duotone"></iconify-icon>
                                </span>
                                <span class="nav-text"> Permissions </span>
                           </a>
                      </li>
                         @endif

                         @if(auth()->guard('admin')->user()->hasPermission('read-admins'))

                         <li class="nav-item">
                           <a class="nav-link menu-arrow" href="#sidebarCustomers" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCustomers">
                                <span class="nav-icon">
                                     <iconify-icon icon="solar:users-group-two-rounded-bold-duotone"></iconify-icon>
                                </span>
                                <span class="nav-text"> Admins </span>
                           </a>
                           <div class="collapse" id="sidebarCustomers">
                                <ul class="nav sub-navbar-nav">
                                     <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="{{ route('admin.admins.index') }}">List</a>
                                     </li>
                                    @if(auth()->guard('admin')->user()->hasPermission('create-admins'))
                                    <li class="sub-nav-item">
                                         <a data-href="{{ route('admin.admins.create') }}" data-container="#hr-table-modal" type="button" class="sub-nav-link btn-modal" >
                                             Create
                                         </a>
                                     </li>
                                    @endif
                                </ul>
                           </div>
                      </li>
                      @endif
                      <li class="nav-item">
                         <a class="nav-link menu-arrow" href="#sidebarCustomers" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCustomers">
                              <span class="nav-icon">
                                   <iconify-icon icon="solar:users-group-two-rounded-bold-duotone"></iconify-icon>
                              </span>
                              <span class="nav-text"> Customers </span>
                         </a>
                         <div class="collapse" id="sidebarCustomers">
                              <ul class="nav sub-navbar-nav">

                                   <li class="sub-nav-item">
                                        <a class="sub-nav-link" href="customer-list.html">List</a>
                                   </li>
                                   <li class="sub-nav-item">
                                        <a class="sub-nav-link" href="customer-detail.html">Details</a>
                                   </li>
                              </ul>
                         </div>
                    </li>
                     @if(auth()->guard('admin')->user()->hasPermission('read-sellers'))
                      <li class="nav-item">
                           <a class="nav-link menu-arrow" href="#sidebarSellers" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSellers">
                                <span class="nav-icon">
                                     <iconify-icon icon="solar:shop-bold-duotone"></iconify-icon>
                                </span>
                                <span class="nav-text"> Sellers </span>
                           </a>
                           <div class="collapse" id="sidebarSellers">
                                <ul class="nav sub-navbar-nav">
                                    @if(auth()->guard('admin')->user()->hasPermission('read-sellers'))
                                     <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="{{ route('admin.sellers.index') }}">List</a>
                                     </li>
                                    @endif
                                     @if(auth()->guard('admin')->user()->hasPermission('read-orders-sellers'))
                                         <li class="sub-nav-item">
                                            <a class="sub-nav-link" href="{{ route('admin.sellers.orders') }}">orders</a>
                                            </li>
                                        @endif

                                    @if(auth()->guard('admin')->user()->hasPermission('create-sellers'))
                                     <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="{{ route('admin.sellers.create') }}">Create</a>
                                     </li>
                                        @endif
                                </ul>
                           </div>
                      </li>
                     @endif
                      <li class="menu-title mt-2">Other</li>
                       @if(auth()->guard('admin')->user()->hasPermission('read-coupons'))
                      <li class="nav-item">
                           <a class="nav-link menu-arrow" href="#sidebarCoupons" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCoupons">
                                <span class="nav-icon">
                                     <iconify-icon icon="solar:leaf-bold-duotone"></iconify-icon>
                                </span>
                                <span class="nav-text"> Coupons </span>
                           </a>
                           <div class="collapse" id="sidebarCoupons">
                                <ul class="nav sub-navbar-nav">
                                    @if(auth()->guard('admin')->user()->hasPermission('read-coupons'))

                                    <li class="sub-nav-item">
                                          <a class="sub-nav-link" href="{{route('admin.coupons.index')}}">List</a>
                                     </li>
                                    @endif
                                        @if(auth()->guard('admin')->user()->hasPermission('create-coupons'))

                                            <li class="sub-nav-item">
                                             <a data-href="{{ route('admin.coupons.create') }}" data-container="#hr-table-modal" type="button" class="sub-nav-link btn-modal" >
                                                 Create
                                             </a>
                                            </li>
                                        @endif
                                </ul>
                           </div>
                      </li>
                      @endif

                      <li class="nav-item">
                           <a class="nav-link" href="pages-review.html">
                                <span class="nav-icon">
                                     <iconify-icon icon="solar:chat-square-like-bold-duotone"></iconify-icon>
                                </span>
                                <span class="nav-text"> Reviews </span>
                           </a>
                      </li>

                      <li class="menu-title mt-2">Other Apps</li>

                      <li class="nav-item">
                           <a class="nav-link" href="apps-chat.html">
                                <span class="nav-icon">
                                     <iconify-icon icon="solar:chat-round-bold-duotone"></iconify-icon>
                                </span>
                                <span class="nav-text"> Chat </span>
                           </a>
                      </li>

                      <li class="nav-item">
                           <a class="nav-link" href="apps-email.html">
                                <span class="nav-icon">
                                     <iconify-icon icon="solar:mailbox-bold-duotone"></iconify-icon>
                                </span>
                                <span class="nav-text"> Email </span>
                           </a>
                      </li>

                      <li class="nav-item">
                           <a class="nav-link" href="apps-calendar.html">
                                <span class="nav-icon">
                                     <iconify-icon icon="solar:calendar-bold-duotone"></iconify-icon>
                                </span>
                                <span class="nav-text"> Calendar </span>
                           </a>
                      </li>



                      <li class="menu-title mt-2">Support</li>

                      <li class="nav-item">
                           <a class="nav-link" href="help-center.html">
                                <span class="nav-icon">
                                     <iconify-icon icon="solar:help-bold-duotone"></iconify-icon>
                                </span>
                                <span class="nav-text"> Help Center </span>
                           </a>
                      </li>

                      <li class="nav-item">
                           <a class="nav-link" href="pages-faqs.html">
                                <span class="nav-icon">
                                     <iconify-icon icon="solar:question-circle-bold-duotone"></iconify-icon>
                                </span>
                                <span class="nav-text"> FAQs </span>
                           </a>
                      </li>

                      <li class="nav-item">
                           <a class="nav-link" href="privacy-policy.html">
                                <span class="nav-icon">
                                     <iconify-icon icon="solar:document-text-bold-duotone"></iconify-icon>
                                </span>
                                <span class="nav-text"> Privacy Policy </span>
                           </a>
                      </li>


                 </ul>
            </div>
       </div>
       <!-- ========== App Menu End ========== -->
