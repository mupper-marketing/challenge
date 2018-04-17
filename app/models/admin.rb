class Admin < ActiveRecord::Base
    validates :name, :email, presence: true
end
