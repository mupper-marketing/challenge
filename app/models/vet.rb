class Vet < ActiveRecord::Base
    validates :name, :phone, :crv, :address, presence: true
end
