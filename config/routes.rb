Rails.application.routes.draw do
  get 'static_pages/home'

  resources :attendances
  resources :admins
  resources :vets
  resources :donations
  resources :animals
  resources :users
  resources :sessions
  
  get "signup"  => "users#new" 
  
  get "login"   => "sessions#new"
  post "login"  => "sessions#create"
  
  delete 'logout' => 'sessions#destroy'
  
  root to: "static_pages#home"
  
end
