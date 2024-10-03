<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{url('public/backend/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Rocker</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
     </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{route('super.admin.dashboard')}}" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>

        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Slider category</div>
            </a>
            <ul>
                <li> <a href="{{route('SliderPosition.index')}}"><i class='bx bx-radio-circle'></i> All SliderCategory</a>
                </li>
                <li> <a href="{{route('SliderPosition.create')}}"><i class='bx bx-radio-circle'></i>Add SliderCategory</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Slider </div>
            </a>
            <ul>
                <li> <a href="{{route('Slider.index')}}"><i class='bx bx-radio-circle'></i> All Slider</a>
                </li>
                <li> <a href="{{route('Slider.create')}}"><i class='bx bx-radio-circle'></i>Add Slider</a>
                </li>
            </ul>
        </li>


        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Services Category </div>
            </a>
            <ul>
                <li> <a href="{{route('ServiceCategory.index')}}"><i class='bx bx-radio-circle'></i> All ServicesCategory</a>
                </li>
                <li> <a href="{{route('ServiceCategory.create')}}"><i class='bx bx-radio-circle'></i>Add ServicesCategory</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Services </div>
            </a>
            <ul>
                <li> <a href="{{route('Service.index')}}"><i class='bx bx-radio-circle'></i> All Services</a>
                </li>
                <li> <a href="{{route('Service.create')}}"><i class='bx bx-radio-circle'></i>Add Services</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Mission </div>
            </a>
            <ul>
                <li> <a href="{{route('Mission.index')}}"><i class='bx bx-radio-circle'></i> All Mission</a>
                </li>
                <li> <a href="{{route('Mission.create')}}"><i class='bx bx-radio-circle'></i>Add Mission</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Team </div>
            </a>
            <ul>
                <li> <a href="{{route('Team.index')}}"><i class='bx bx-radio-circle'></i> All Team</a>
                </li>
                <li> <a href="{{route('Team.create')}}"><i class='bx bx-radio-circle'></i>Add Team</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Client </div>
            </a>
            <ul>
                <li> <a href="{{route('Client.index')}}"><i class='bx bx-radio-circle'></i> All Client</a>
                </li>
                <li> <a href="{{route('Client.create')}}"><i class='bx bx-radio-circle'></i>Add Client</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Blog </div>
            </a>
            <ul>
                <li> <a href="{{route('Blog.index')}}"><i class='bx bx-radio-circle'></i> All Blog</a>
                </li>
                <li> <a href="{{route('Blog.create')}}"><i class='bx bx-radio-circle'></i>Add Blog</a>
                </li>
            </ul>
        </li>


        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Product Category </div>
            </a>
            <ul>
                <li> <a href="{{route('ProductCategory.index')}}"><i class='bx bx-radio-circle'></i> All ProductCategory</a>
                </li>
                <li> <a href="{{route('ProductCategory.create')}}"><i class='bx bx-radio-circle'></i>Add ProductCategory</a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Product  </div>
            </a>
            <ul>
                <li> <a href="{{route('Product.index')}}"><i class='bx bx-radio-circle'></i> All Product </a>
                </li>
                <li> <a href="{{route('Product.create')}}"><i class='bx bx-radio-circle'></i>Add Product </a>
                </li>
            </ul>
        </li>


        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Project  </div>
            </a>
            <ul>
                <li> <a href="{{route('Project.index')}}"><i class='bx bx-radio-circle'></i> All Project </a>
                </li>
                <li> <a href="{{route('Project.create')}}"><i class='bx bx-radio-circle'></i>Add Project </a>
                </li>
            </ul>
        </li>


        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Gallary Category  </div>
            </a>
            <ul>
                <li> <a href="{{route('GallaryCategory.index')}}"><i class='bx bx-radio-circle'></i> All GallaryCategory </a>
                </li>
                <li> <a href="{{route('GallaryCategory.create')}}"><i class='bx bx-radio-circle'></i>Add GallaryCategory </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Gallary  </div>
            </a>
            <ul>
                <li> <a href="{{route('Gallary.index')}}"><i class='bx bx-radio-circle'></i> All Gallary </a>
                </li>
                <li> <a href="{{route('Gallary.create')}}"><i class='bx bx-radio-circle'></i>Add Gallary </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Faq Category  </div>
            </a>
            <ul>
                <li> <a href="{{route('FaqCategory.index')}}"><i class='bx bx-radio-circle'></i> All FaqCategory </a>
                </li>
                <li> <a href="{{route('FaqCategory.create')}}"><i class='bx bx-radio-circle'></i>Add FaqCategory </a>
                </li>
            </ul>
        </li>


        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title"> Faq Question  </div>
            </a>
            <ul>
                <li> <a href="{{route('FaqQuestion.index')}}"><i class='bx bx-radio-circle'></i> All FaqQuestion  </a>
                </li>
                <li> <a href="{{route('FaqQuestion.create')}}"><i class='bx bx-radio-circle'></i>Add FaqQuestion  </a>
                </li>
            </ul>
        </li>



        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title"> Answer </div>
            </a>
            <ul>
                <li> <a href="{{route('Answer.index')}}"><i class='bx bx-radio-circle'></i> All Answer  </a>
                </li>
                <li> <a href="{{route('Answer.create')}}"><i class='bx bx-radio-circle'></i>Add Answer  </a>
                </li>
            </ul>
        </li>


        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title"> About </div>
            </a>
            <ul>
                <li> <a href="{{route('About.index')}}"><i class='bx bx-radio-circle'></i> All About  </a>
                </li>
                <li> <a href="{{route('About.create')}}"><i class='bx bx-radio-circle'></i>Add About  </a>
                </li>
            </ul>
        </li>


        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title"> Approach </div>
            </a>
            <ul>
                <li> <a href="{{route('Approach.index')}}"><i class='bx bx-radio-circle'></i> All Approach  </a>
                </li>
                <li> <a href="{{route('Approach.create')}}"><i class='bx bx-radio-circle'></i>Add Approach  </a>
                </li>
            </ul>
        </li>
    </ul>
    <!--end navigation-->
</div>
