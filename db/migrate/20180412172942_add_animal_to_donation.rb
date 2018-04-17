class AddAnimalToDonation < ActiveRecord::Migration
  def change
    add_reference :donations, :animal, index: true, foreign_key: true
  end
end
