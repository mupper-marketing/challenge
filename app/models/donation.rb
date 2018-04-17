class Donation < ActiveRecord::Base
    belongs_to :animal
    validates :donor, :donation_type, :quantity, presence: true
    validates :donation_type, inclusion: { in: ["Ração", "Medicamento"] }
end
