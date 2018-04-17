class Attendance < ActiveRecord::Base
  belongs_to :animal
  belongs_to :vet
  
  validates :dt, :animal, :vet, :obs, presence: true
end
